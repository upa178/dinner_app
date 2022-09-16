<?php

namespace App\UseCase\Signup;

use App\Domain\ValueObject\NewUser;
use App\Domain\Port\UserRepository;
use App\UseCase\Signup\SignupOutput;

final class SignupInteractor implements Signup
{
    private $input;
    private $userRepository;
    public function __construct($input, UserRepository $userRepository)
    {
        $this->input = $input;
        $this->userRepository = $userRepository;
    }

    public function handler(): SignupOutput
    {
        $isSuccess = $this->insertUser();
        return new SignupOutput($isSuccess);
    }

    private function insertUser()
    {
        $newUser = new NewUser(
            $this->input->email(),
            $this->input->userName(),
            $this->input->password()->hashAsString()
        );
        return $this->userRepository->insert($newUser);
    }
}
