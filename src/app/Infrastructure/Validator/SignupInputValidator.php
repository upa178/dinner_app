<?php

namespace App\Infrastructure\Validator;

use App\Domain\ValueObject\UserName;

final class SignupInputValidator
{
    public const ERROR_EMAIL_INVALID_FORMAT = '不正な形式のメールアドレスです';
    public const ERROR_EMAIL_NULL_TEXT = 'Emailが空です';
    public const ERROR_USERNAME_INVALID = '不正な形式のユーザー名です';
    public const ERROR_PASSWORD_NULL_TEXT = 'passwordが空です';
    public const ERROR_CONFIRM_PASSWORD_TEXT = 'パスワード確認が一致しません';

    private $email;
    private $userName;
    private $password;
    private $confirmPassword;

    /**
     * コンストラクタ
     *
     * @param string|null $email
     * @param string|null $password
     */
    public function __construct(
        ?string $email,
        ?string $userName,
        ?string $password,
        ?string $confirmPassword
    ) {
        $this->email = $email;
        $this->userName = $userName;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    /**
     * Emailのバリデーション
     *
     * @return string|null
     */
    private function emailErrorText(): ?string
    {
        if (empty($this->email)) {
            return self::ERROR_EMAIL_NULL_TEXT;
        }

        $pattern =
            "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";
        if (!preg_match($pattern, $this->email)) {
            return self::ERROR_EMAIL_INVALID_FORMAT;
        }

        return null;
    }

    /**
     * userNameのバリデーション
     * 
     * @return string|null
     */
    private function userNameErrorText(): ?string
    {
        if (!UserName::isValid($this->userName)) {
            return self::ERROR_USERNAME_INVALID;
        }
        return null;
    }

    /**
     * passwordのバリデーション
     *
     * @return string|null
     */
    private function passwordErrorText(): ?string
    {
        if (empty($this->password)) {
            return self::ERROR_PASSWORD_NULL_TEXT;
        }

        if ($this->password !== $this->confirmPassword) {
            return self::ERROR_CONFIRM_PASSWORD_TEXT;
        }

        return null;
    }

    /**
     * エラーメッセージの全件取得
     *
     * @return array
     */
    public function errorMessages(): array
    {
        $errors = [$this->emailErrorText(), $this->userNameErrorText(), $this->passwordErrorText()];
        return array_filter($errors);
    }
}
