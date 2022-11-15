<?php

namespace App\UseCase\Signin;

use App\Domain\Entity\User;
use App\Domain\ValueObject\AuthUser;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Name;
use App\Domain\ValueObject\UserId;
use App\Lib\Session;
use App\UseCase\Signin\Signin;
use App\UseCase\Signin\SigninInput;
use App\Domain\Port\UserQueryService;

final class SigninInteractor implements Signin
{
    private $input;
    private $userQueryService;
    public function __construct(
        SigninInput $input,
        UserQueryService $userQueryService
    ) {
        $this->input = $input;
        $this->userQueryService = $userQueryService;
    }

    public function handler(): SigninOutput
    {
        $user = $this->findByEmail();
        if ($user) {
            $this->saveSession($user);
        }
        return new SigninOutput($user);
    }

    private function findByEmail(): User
    {
        return $this->userQueryService->findByEmail($this->input->email());
    }

    private function saveSession(User $user): void
    {
        $userId = $user->id();
        $userName = $user->name();
        $userEmail = $user->email();

        $authUser = new AuthUser(
            new UserId($userId->value()),
            new Name($userName->value()),
            new Email($userEmail->value())
        );
        //TODO: Daoと同じような流れで作る。authRepositoryを使用する。
        $session = Session::getInstance();
        $session->setAuth($authUser);
    }
}
