<?php

use App\Lib\Session;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\UserName;
use App\Domain\ValueObject\Password;
use App\UseCase\Signup\SignupInput;
use App\UseCase\Signup\SignupInteractor;
use App\Adapter\Repository\UserMySqlRepository;
use App\Lib\Redirect;
use App\Infrastructure\Validator\SignupInputValidator;

require_once __DIR__ . '/../../vendor/autoload.php';

$session = Session::getInstance();
date_default_timezone_set('Asia/Tokyo');

$userInfo = json_decode(file_get_contents('php://input'), true);

$emailInput = $userInfo['email'];
$userNameInput = $userInfo['userName'];
$passwordInput = $userInfo['password'];
$confirmPasswordInput = $userInfo['confirmPassword'];
$signupInputValidator = new SignupInputValidator(
    $emailInput,
    $userNameInput,
    $passwordInput,
    $confirmPasswordInput
);
$messeages = $signupInputValidator->errorMessages();

if (!empty($messeages)) {
    echo json_encode($messeages);
    die;
}

$email = new Email($emailInput);
$userName = new UserName($userNameInput);
$password = new Password($passwordInput);

$input = new SignupInput($email, $userName, $password);
$userRepository = new UserMySqlRepository();
$useCase = new SignupInteractor($input, $userRepository);
$output = $useCase->handler();

$response = [
    'data' => [
        'status' => $output->isSuccess(),
    ],
];
echo json_encode($response);
die();
