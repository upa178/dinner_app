<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Adapter\Query\UserMysqlQueryService;
use App\Infrastructure\Validator\SigninInputValidator;
use App\Lib\Redirect;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Password;
use App\Lib\Session;
use App\UseCase\Signin\SigninInput;
use App\UseCase\Signin\SigninInteractor;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

try {
    $signinInputError = new SigninInputValidator($email, $password);
    $errors = $signinInputError->errorMessages();

    $session = Session::getInstance();
    if (!empty($errors)) {
        $session->setErrors($errors);
        Redirect::handler('/signin.php');
    }



    $inputEmail = new Email($email);
    $inputPassword = new Password($password);
    $input = new SigninInput($inputEmail, $inputPassword);
    $userQueryService = new UserMysqlQueryService();
    $usecase = new SigninInteractor($input, $userQueryService);
    $output = $usecase->handler();
    $user = $output->user();

    if ($user) {
        Redirect::handler('/index.php');
    }
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
