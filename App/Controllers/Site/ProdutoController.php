<?php

namespace App\Controllers\Site;

use App\Classes\ErrorsValidate;
use App\Classes\Validate;
use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    private $errorValidate;
    private $validate;

    public function __construct()
    {
        $this->validate = new Validate();
        $this->errorValidate = new ErrorsValidate();
    }

    public function index($parameters)
    {
        $dados = [
            'titulo' => 'SRO Manager'
        ];

        $template = $this->twig->load('produto001.html');
        $template->display($dados);
    }

    public function novo($parameters)
    {
        $dados = [
            'titulo' => 'SRO Manager'
        ];

        $template = $this->twig->load('produto002.html');
        $template->display($dados);
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rules = [
                'nome' => 'required'
            ];

            $this->validate->validate($rules);

            if (empty($this->errorValidate->errorsValidate())) {
                dump("nenhum erro");
            } else {
                dump("erro");
            }
        }
    }
}
