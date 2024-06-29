<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\Site\User;
use App\Models\Site\UserModel;

class HomeController extends BaseController
{

    public function index()
    {

        $dados = [
            'titulo' => 'SRO Manager'
        ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);
    }
}
