<?php

namespace App\UseCase\Signin;

use App\Domain\Entity\User;

final class SigninOutput
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function user(): User
    {
        return $this->user;
    }
}
