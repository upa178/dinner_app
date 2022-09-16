<?php

namespace App\Domain\ValueObject;

use App\Domain\ValueObject\DishName;
use App\Domain\ValueObject\Recipe;
use App\Domain\ValueObject\UserId;
use Exception;

final class NewDinnerMenu
{
    private UserId $userId;
    private DishName $dishName;
    private Recipe $recipe;

    public function __construct(
        UserId $userId,
        DishName $dishName,
        Recipe $recipe
    ) {
        $this->userId = $userId;
        $this->dishName = $dishName;
        $this->recipe = $recipe;
    }

    public function userId(): UserId
    {
        return $this->userId;
    }

    public function dishName(): DishName
    {
        return $this->dishName;
    }

    public function recipe(): Recipe
    {
        return $this->recipe;
    }
}
