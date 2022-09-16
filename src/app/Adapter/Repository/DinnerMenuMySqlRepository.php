<?php

namespace App\Adapter\Repository;

use App\Domain\ValueObject\NewDinnerMenu;
use App\Infrastructure\Dao\DinnerMenusDao;
use App\Domain\Port\DinnerMenuRepository;

final class DinnerMenuMySqlRepository implements DinnerMenuRepository
{
    public function __construct()
    {
        $this->dinnerMenuDao = new DinnerMenusDao();
    }

    public function insert(
        NewDinnerMenu $newDinnerMenu
    ): bool {
        return $this->dinnerMenuDao->insert($newDinnerMenu->userId()->value(), $newDinnerMenu->dishName()->value(), $newDinnerMenu->recipe()->value());
    }
}
