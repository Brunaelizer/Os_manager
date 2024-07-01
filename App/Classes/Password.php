<?php

namespace App\Classes;



class Password
{
    public function hash($password)
    {
        $options = [
            'cost' => 11
        ];

        return password_hash($password, PASSWORD_DEFAULT, $options);
    }

    public function verifyPassword($password, $hash)
    {
        if (password_verify($password, $hash)) {
            return true;
        }
        return false;
    }
}
