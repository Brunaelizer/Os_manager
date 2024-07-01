<?php

namespace App\Classes;

class UserLoggedIn
{
    public function loggedin()
    {
        if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
            return true;
        }
        return false;
    }
}
