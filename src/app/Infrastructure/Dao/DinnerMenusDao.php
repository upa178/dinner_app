<?php

namespace App\Infrastructure\Dao;

use PDO;

final class DinnerMenusDao extends Dao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(
        int $userId,
        string $dishName,
        string $recipe
    ) {
        $sql = <<<EOF
    INSERT INTO dinner_menus
    (user_id, name, recipe)
    VALUES
    (:user_id, :name, :recipe)
EOF;

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindvalue(':name', $dishName, PDO::PARAM_STR);
        $stmt->bindvalue(':recipe', $recipe, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
