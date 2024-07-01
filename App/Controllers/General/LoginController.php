<?php

namespace App\Controllers\General;

use App\Classes\Login;
use App\Classes\Filters;
use App\Classes\Redirect;
use App\Controllers\BaseController;
use App\Models\Site\UserLoginModel;

class LoginController extends BaseController
{


    public function index()
    {
        $dados = [
            'titulo' => "SRO Manager | Login"
        ];

        $template = $this->twig->load('login.html');
        $template->display($dados);
    }

    public function enter()
    {
        $redirect = new Redirect;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $filter = new Filters();
            $email = $filter->filter('f_email', 'string');
            $password = $filter->filter('f_password', 'string');


            $login = new Login();
            $login->setEmail($email);
            $login->setPassword($password);


            if ($login->enter(new UserLoginModel())) {
                return $redirect->redirect('/');
            }
            return $redirect->redirect('/login');
        }
        return $redirect->redirect('/');
    }
}
