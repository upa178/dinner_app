<?php

use App\Domain\ValueObject\DishName;
use App\UseCase\PostDinnerMenu\PostDinnerMenuInput;
use App\Domain\ValueObject\Recipe;
use App\UseCase\PostDinnerMenu\PostDinnerMenuInteractor;
use App\Adapter\Repository\DinnerMenuMySqlRepository;
use App\Lib\Redirect;
use App\Domain\ValueObject\UserId;
use App\Lib\Session;

require_once __DIR__ . '/../../vendor/autoload.php';

$dishName = filter_input(INPUT_POST, 'dish-name');
$recipe = filter_input(INPUT_POST, 'recipe');
$session = Session::getInstance();
//TODO: サインイン処理追加したらセッションからID取得する形にする。
$userId = 1;

$input = new PostDinnerMenuInput(
    new UserId($userId),
    new DishName($dishName),
    new Recipe($recipe)
);

$DinnerMenuRepository = new DinnerMenuMySqlRepository();
$usecase = new PostDinnerMenuInteractor($input, $DinnerMenuRepository);
$output = $usecase->handler();

if ($output) {
    Redirect::handler('../index.php');
}
