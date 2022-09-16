<?php

namespace App\UseCase\PostDinnerMenu;

use App\Domain\Port\DinnerMenuRepository;


interface PostDinnerMenu
{
  public function __construct(
    PostDinnerMenuInput $input,
    DinnerMenuRepository $DinnerMenuRepository
  );
  public function handler(): PostDinnerMenuOutput;
}
