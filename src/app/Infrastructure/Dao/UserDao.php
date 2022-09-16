<?php

namespace App\Infrastructure\Dao;

use PDO;

final class UserDao extends Dao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(
        string $userName,
        string $email,
        string $password
    ) {
        $sql = <<<EOF
    INSERT INTO users
    (name, email, password)
    VALUES
    (:name, :email, :password)
EOF;

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(':name', $userName, PDO::PARAM_STR);
        $stmt->bindvalue(':email', $email, PDO::PARAM_STR);
        $stmt->bindvalue(':password', $password, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
