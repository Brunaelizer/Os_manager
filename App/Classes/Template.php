<?php

namespace App\Classes;

class Template
{

    public function loader()
    {
        return new \Twig\Loader\FilesystemLoader(['../App/Views/Site', '../App/Views/Admin', '../App/Views/Masters', '../App/Views/General']);
    }

    public function init()
    {
        return new \Twig\Environment($this->loader(), [
            'debug' => true,
            //'cache'=>'',
            'auto_reload' => true
        ]);
    }
}
