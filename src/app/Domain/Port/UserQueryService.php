<?php

namespace App\Domain\Port;

use App\Domain\ValueObject\Email;
use App\Domain\Entity\User;

interface UserQueryService
{
    public function findByEmail(Email $email): User;
}
