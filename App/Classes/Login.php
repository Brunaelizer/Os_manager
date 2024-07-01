<?php

namespace App\Classes;

use App\Classes\Password;
use App\Interfaces\ILogin;

class Login
{
    private $email;
    private $password;

    function setEmail($email)
    {
        $this->email = $email;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }

    public function enter(Ilogin $interfaceLogin)
    {

        $foundUser = $interfaceLogin->find('email', $this->email);
        if (!$foundUser) {
            return false;
        }
        $passwordClass = new Password;

        if ($passwordClass->verifyPassword($this->password, $foundUser->user_password)) {
            $_SESSION['id'] = $foundUser->id;
            $_SESSION['email'] = $foundUser->email;
            $_SESSION['logged'] = true;
            return true;
        }
    }
}
