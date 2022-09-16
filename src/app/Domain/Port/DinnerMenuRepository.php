<?php

namespace App\Domain\Port;

use App\Domain\ValueObject\NewDinnerMenu;

interface DinnerMenuRepository
{
    public function insert(NewDinnerMenu $newDinnerMenu): bool;
}
