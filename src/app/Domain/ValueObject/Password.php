<?php

namespace App\Domain\ValueObject;

use Exception;

final class Password
{
    private const PATTERN =  '/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,24}+\z/';
    private $value;
    public function __construct(string $value)
    {
        if (preg_match(self::PATTERN, $value)) {
            throw new Exception('不正な形式のパスワードです');
        }
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function hashAsString(): string
    {
        return password_hash($this->value, PASSWORD_DEFAULT);
    }
}
