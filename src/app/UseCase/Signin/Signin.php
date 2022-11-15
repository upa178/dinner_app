<?php

namespace App\UseCase\Signin;

use App\Domain\Port\UserQueryService;

interface Signin
{
    public function __construct(
        SigninInput $input,
        UserQueryService $userQueryService
    );
    public function handler(): SigninOutput;
}
