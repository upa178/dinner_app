<?php

namespace App\UseCase\Signup;

final class SignupOutput
{
    private $isSuccess;
    public function __construct(bool $isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }

    public function isSuccess()
    {
        return $this->isSuccess;
    }
}
