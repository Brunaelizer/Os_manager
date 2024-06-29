<?php

namespace App\Models;

use App\Models\Database\DatabaseType\DatabaseType;
use App\Models\Database\DatabaseType\DatabaseTypePdo;
use App\Models\ITypeDatabase;


class Model
{
    public $typeDatabase;

    public function __construct()
    {
        $database = new DatabaseType(new DatabaseTypePdo);
        $this->typeDatabase = $database->getDatabase();
    }

    public function fetchAll()
    {
        $sql = "select * from {$this->table}";
        $this->typeDatabase->prepare($sql);
        $this->typeDatabase->execute();
        return $this->typeDatabase->fetchAll();
    }

    public function find($field, $value, $fetch = null)
    {
        $sql = "select * from {$this->table} where $field = ?";
        $this->typeDatabase->prepare($sql);
        $this->typeDatabase->bindValue(1, $value);
        $this->typeDatabase->execute();
        return ($fetch == null) ? $this->typeDatabase->fetch() : $this->typeDatabase->fetchAll();
    }
}
