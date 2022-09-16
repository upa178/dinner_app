<?php

namespace App\Domain\Port;

use App\Domain\ValueObject\NewUser;

interface UserRepository
{
    public function insert(NewUser $newUser): bool;
}
