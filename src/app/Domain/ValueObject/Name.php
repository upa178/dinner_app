<?php

namespace App\Domain\ValueObject;

use Exception;

final class Name
{
    private $value;
    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new Exception('名前を入力してください');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
