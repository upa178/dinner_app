<?php

namespace App\Domain\ValueObject;

use Exception;

final class Email
{
    private $value;
    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new Exception('emailを入力してください');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
