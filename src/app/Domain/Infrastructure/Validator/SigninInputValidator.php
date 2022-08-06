<?php

namespace App\Domain\Infrastructure\Validator;

final class SigninInputValidator
{
    public const ERROR_EMAIL_INVALID_FORMAT = '不正な形式のメールアドレスです';
    public const ERROR_EMAIL_NULL_TEXT = 'Emailが空です';
    public const ERROR_PASSWORD_NULL_TEXT = 'passwordが空です';

    private $email;
    private $password;

    /**
     * コンストラクタ
     *
     * @param string|null $email
     * @param string|null $password
     */
    public function __construct(?string $email, ?string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Emailのバリデーション
     *
     * @return void
     */
    private function emailErrorText()
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
     * passwordのバリデーション
     *
     * @return void
     */
    private function passwordErrorText()
    {
        if (empty($this->password)) {
            return self::ERROR_PASSWORD_NULL_TEXT;
        }
    }

    /**
     * エラーメッセージの全件取得
     *
     * @return void
     */
    public function errorMessages()
    {
        $errors = [$this->emailErrorText(), $this->passwordErrorText()];
        return array_filter($errors);
    }
}
