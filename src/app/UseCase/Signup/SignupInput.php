<?php

namespace App\UseCase\Signup;

use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\UserName;
use App\Domain\ValueObject\Password;

final class SignupInput
{
    private $email;
    private $userName;
    private $password;
    private $confirmPassword;
    public function __construct(
        Email $email,
        UserName $userName,
        Password $password,
        $confirmPassword
    ) {
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    //signin情報nullの判定はjsで行って、入力値の形式チェックはバリデーターでおこなようにするか？
    public function email()
    {
        return $this->email;
    }
    public function userName()
    {
        return $this->userName;
    }

    public function password()
    {
        return $this->password;
    }

    public function confirmPassword()
    {
        return $this->confirmPassword;
    }
}
