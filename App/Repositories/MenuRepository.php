<?php

namespace App\Repositories;


use App\Models\MenuModel;


class MenuRepository
{
    private $menu;

    public function __construct()
    {
        $this->menu = new MenuModel;
    }

    public function listMenu()
    {
        $sql = "select * from {$this->menu->table}";
        $this->menu->typeDatabase->prepare($sql);
        $this->menu->typeDatabase->execute();
        return $this->menu->typeDatabase->fetchAll();
    }
}
