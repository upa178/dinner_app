<?php

namespace App\UseCase\PostDinnerMenu;

final class PostDinnerMenuOutput
{
    private $isSuccess;
    public function __construct(bool $isSuccess)
    {
        $this->isSuccess = $isSuccess;
    }

    public function isSuccess()
    {
        return $this->isSuccess;
    }
}
