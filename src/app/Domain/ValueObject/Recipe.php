<?php

namespace App\Domain\ValueObject;

use Exception;

final class Recipe
{
    const MAX_LENGTH = 500;

    const MIN_LENGTH = 1;
    public function __construct(string $value)
    {
        if ($this->isInvalidLength($value)) {
            throw new Exception('レシピは1文字以上500文字以内で入力してください');
        }

        $this->value = $value;
        
    }

    public function value(): string
    {
        return $this->value;
    }

    private function isInvalidLength(string $value): bool
    {
        return strlen($value) < self::MIN_LENGTH || self::MAX_LENGTH < strlen($value);
    }
}
