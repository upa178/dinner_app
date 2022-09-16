<?php

namespace App\Domain\ValueObject;

final class NewUser
{
    private Email $email;
    private UserName $userName;
    private string $password;

    public function __construct(
        Email $email,
        UserName $userName,
        string $password
    ) {
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function userName(): UserName
    {
        return $this->userName;
    }

    public function password(): string
    {
        return $this->password;
    }
}
