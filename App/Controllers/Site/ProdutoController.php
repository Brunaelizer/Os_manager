<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    public function index($parameters)
    {
        dump("teste");
    }

    public function teste($parameters)
    {
        dump($parameters);
    }
}
