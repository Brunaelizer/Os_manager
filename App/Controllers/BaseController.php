<?php

namespace App\Controllers;

class BaseController
{
    protected $twig;
    public $filter;

    public function setTwig($twig)
    {
        $this->twig = $twig;
    }
}
