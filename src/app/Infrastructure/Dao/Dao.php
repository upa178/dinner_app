<?php

namespace App\Infrastructure\Dao;

use PDO;

abstract class Dao
{
    const DB_HOST = 'mysql';
    const DB_NAME = 'dinner';
    const DB_USER = 'root';
    const DB_PASSWORD = 'password';

    protected $pdo;

    protected function __construct()
    {
        $dsn = sprintf(
            'mysql:charset=UTF8;dbname=%s;host=%s',
            self::DB_NAME,
            self::DB_HOST
        );
        $this->pdo = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
    }
}
