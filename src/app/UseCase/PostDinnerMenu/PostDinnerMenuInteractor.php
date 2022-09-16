<?php

namespace App\UseCase\PostDinnerMenu;

use App\Domain\ValueObject\NewDinnerMenu;
use App\Domain\Port\DinnerMenuRepository;

final class PostDinnerMenuInteractor implements PostDinnerMenu
{
    private $input;

    private $dinnerMenuRepository;
    public function __construct(PostDinnerMenuInput $input, DinnerMenuRepository $dinnerMenuRepository)
    {
        $this->input = $input;
        $this->dinnerMenuRepository = $dinnerMenuRepository;
    }

    public function handler(): PostDinnerMenuOutput
    {
        $isSuccess = $this->insertDinnerMenu();
        return new PostDinnerMenuOutput($isSuccess);
    }

    private function insertDinnerMenu(): bool
    {
        $newDinnerMenu = new NewDinnerMenu($this->input->userId(), $this->input->dishName(), $this->input->recipe());
        return $this->dinnerMenuRepository->insert($newDinnerMenu);
    }
}
