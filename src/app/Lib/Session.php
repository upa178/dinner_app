<?php

namespace App\Lib;

final class Session
{
    const AUTH_KEY = 'authKey';
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

    public function setUserId()
    {
    }
}
