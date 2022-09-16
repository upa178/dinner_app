<?php

namespace App\Domain\ValueObject;

use Exception;

final class UserName
{
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
}
