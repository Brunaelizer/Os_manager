<?php

namespace App\Repositories\Site;


use App\Models\Site\ProdutoModel;


class ProdutoRepository
{
    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel;
    }

    public function listaProdutosOrdenadosConLimite($limite)
    {
        $sql = "select * from {$this->produto->table}";
        $this->produto->typeDatabase->prepare($sql);
        $this->produto->typeDatabase->execute();
        return $this->produto->typeDatabase->fetchAll();
    }
}
