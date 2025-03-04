<?php

namespace App\Interfaces;

interface ITypeDatabase
{
    public function prepare($sql);
    public function bindValue($key, $value);
    public function execute();
    public function rowCount();
    public function fetch();
    public function fetchAll();
}
