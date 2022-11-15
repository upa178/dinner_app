<?php

namespace App\Lib;

use App\Domain\ValueObject\AuthUser;
use App\Domain\ValueObject\Email;
use App\Domain\ValueObject\Name;
use App\Domain\ValueObject\UserId;

final class Session
{
    const ERRORS = 'errors';
    const AUTH_KEY = 'authKey';

    const USER_KEY = 'userKey';

    const NAME_KEY = 'nameKey';

    const EMAIL_KEY = 'emailKey';
    private static $instance;
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        self::start();

        return self::$instance;
    }

    private static function start()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function auth(): ?array
    {
        return $_SESSION[self::AUTH_KEY] ?? null;
    }


    public function setErrors(array $errors): array
    {
        return $_SESSION[self::ERRORS] = $errors;
    }

    /**
     * セッションに保存したエラー情報を返す
     * 存在しなければnullを返す
     * @return array
     */
    public function errors(): array
    {
        return $_SESSION[self::ERRORS] ?? [];
    }

    public function clearErrors(): void
    {
        unset($_SESSION[self::ERRORS]);
    }

    public function setAuth(AuthUser $authUser)
    {
        $this->setUserId($authUser->userId());
        $this->setUserName($authUser->userName());
        $this->setUserEmail($authUser->email());
    }

    private function setUserId(UserId $userId): void
    {
        $_SESSION[self::USER_KEY] = $userId->value();
    }

    private function setUserName(Name $name): void
    {
        $_SESSION[self::NAME_KEY] = $name->value();
    }

    private function setUserEmail(Email $email): void
    {
        $_SESSION[self::EMAIL_KEY] = $email->value();
    }
}
