<?php

namespace App\Domain\ValueObject;

use Exception;

final class UserName
{
    private const MAX_LENGTH = 10;
    private $value;
    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new Exception('ユーザー名を入力してください');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function isValid(string $value): bool
    {
        if ($value === "") return false;
        return (strlen($value) <= self::MAX_LENGTH);
    }
}
