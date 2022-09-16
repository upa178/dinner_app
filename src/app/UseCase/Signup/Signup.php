<?php

namespace App\UseCase\Signup;

use App\Domain\Port\UserRepository;

interface Signup
{
    public function __construct(
        SignupInput $input,
        UserRepository $SignupRepository
    );
    public function handler(): SignupOutput;
}
