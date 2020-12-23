<?php
namespace MyApp;
class Auth
{
    public static function getUser()
    {
        return $_SESSION['user'];
    }
    public static function login($login)
    {
        $_SESSION['user'] = Users::get($login);

    }
    public static function logout()
    {
        $_SESSION['user'] = null;
    }
}
