<?php

namespace App\Domain\ValueObject;

use Exception;

final class DishName
{
    const MAX_LENGTH = 30;

    const MIN_LENGTH = 1;
    public function __construct(string $value)
    {
        if ($this->isInvalidLength($value)) {
            throw new Exception('料理名は1文字以上30文字以内で入力してください');
        }

        $this->value = $value;
        
    }

    public function value(): string
    {
        return $this->value;
    }

    public function isInvalidLength(string $value): bool
    {
        return strlen($value) < self::MIN_LENGTH || self::MAX_LENGTH < strlen($value);
    }
}
