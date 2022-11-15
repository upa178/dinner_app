<?php

namespace App\Adapter\Query;

use App\Domain\Entity\User;
use App\Domain\ValueObject\Name;
use App\Domain\ValueObject\Password;
use App\Domain\ValueObject\UserId;
use App\Infrastructure\Dao\UserDao;
use App\Domain\ValueObject\Email;
use App\Domain\Port\UserQueryService;


final class UserMysqlQueryService implements UserQueryService
{
    private $userDao;
    public function __construct()
    {
        $this->userDao = new UserDao();
    }

    public function findByEmail(Email $email): User
    {
        $userMapper = $this->userDao->findByEmail($email->value());
        return $this->create($userMapper);
    }

    private function create(array $userMapper): User
    {
        return new User(
            new UserId($userMapper['id']),
            new Name($userMapper['name']),
            new Email($userMapper['email']),
            new Password($userMapper['password'])
        );
    }
}
