<?php

namespace App\UseCase\Signin;

use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Password;

final class SigninInput
{
    private $email;
    private $password;
    public function __construct(
        Email $email,
        Password $password,
    ) {
        $this->email = $email;
        $this->password = $password;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function password(): Password
    {
        return $this->password;
    }
}
