<?php

namespace App\Models\Database\DatabaseType;

use App\Interfaces\ITypeDatabase;
use App\Models\Database\DatabaseConnection\Connection;
use App\Models\Database\DatabaseConnection\DbPdo;

class DatabaseTypePDO implements ITypeDatabase
{
    private $pdo;
    private $objectPdo;

    public function __construct()
    {
        $pdo = new Connection(new DbPdo);
        $this->pdo = $pdo->connectDatabase();
    }

    public function prepare($sql)
    {
        $this->objectPdo = $this->pdo->prepare($sql);
    }
    public function bindValue($key, $value)
    {
        $this->objectPdo->bindValue($key, $value);
    }
    public function execute()
    {
        $this->objectPdo->execute();
    }
    public function rowCount()
    {
        return $this->objectPdo->rowCount();
    }
    public function fetch()
    {
        return $this->objectPdo->fetch();
    }
    public function fetchAll()
    {
        return $this->objectPdo->fetchAll();
    }
}
