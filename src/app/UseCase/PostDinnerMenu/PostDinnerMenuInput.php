<?php

namespace App\UseCase\PostDinnerMenu;

use App\Domain\ValueObject\DishName;
use App\Domain\ValueObject\Recipe;
use App\Domain\ValueObject\UserId;

final class PostDinnerMenuInput
{
    private $userId;
    private $dishName;
    private $recipe;
    public function __construct(
        UserId $userId,
        DishName $dishName,
        Recipe $recipe
    ) {
        $this->userId = $userId;
        $this->dishName = $dishName;
        $this->recipe = $recipe;
    }

    public function userId()
    {
        return $this->userId;
    }
    public function dishName()
    {
        return $this->dishName;
    }

    public function recipe()
    {
        return $this->recipe;
    }
}
