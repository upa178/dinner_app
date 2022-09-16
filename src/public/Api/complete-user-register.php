<?php

use App\Lib\Session;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\UserName;
use App\Domain\ValueObject\Password;
use App\UseCase\Signup\SignupInput;
use App\UseCase\Signup\SignupInteractor;
use App\Adapter\Repository\UserMySqlRepository;
use App\Lib\Redirect;

require_once __DIR__ . '/../../vendor/autoload.php';

$session = Session::getInstance();
$email = new Email(filter_input(INPUT_POST, 'email'));
$userName = new UserName(filter_input(INPUT_POST, 'user-name'));
$password = new Password(filter_input(INPUT_POST, 'password'));
$confirmPassword = filter_input(INPUT_POST, 'confirm-password');

$input = new SignupInput($email, $userName, $password, $confirmPassword);
$userRepository = new UserMySqlRepository();
$useCase = new SignupInteractor($input, $userRepository);
$output = $useCase->handler();

if ($output) {
    Redirect::handler('../index.php');
}
