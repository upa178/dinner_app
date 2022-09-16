<?php

namespace App\Adapter\Repository;

use App\Infrastructure\Dao\UserDao;
use App\Domain\Port\UserRepository;
use App\Domain\ValueObject\NewUser;



final class UserMySqlRepository implements UserRepository
{
    private $userDao;
    public function __construct()
    {
        $this->userDao = new UserDao();
    }

    public function insert(
        NewUser $newUser
    ): bool {
        return $this->userDao->insert(
            $newUser->userName()->value(),
            $newUser->email()->value(),
            $newUser->password()
        );
    }
}
