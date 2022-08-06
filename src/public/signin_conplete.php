<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Lib\Redirect;
use App\Domain\Infrastructure\Validator\SigninInputValidator;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

try {
    $signinInputError = new SignInInputValidator($email, $password);
    $errors = $signinInputError->errorMessages();

    if (!empty($errors)) {
        $session->setErrors($errors);
        Redirect::handler('/signin.php');
    }

    
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
