<?php

namespace App\Models\Database\DatabaseType;

use App\Interfaces\ITypeDatabase;
use App\Models\Database\DatabaseConnection\Connection;
use App\Models\Database\DatabaseConnection\DbMysqli;
use mysqli;

class DatabaseTypeMysqli implements ITypeDatabase
{
    private $mysqli;
    private $objectMysqli;

    public function __construct()
    {
        $mysqli = new Connection(new DbMysqli);
        $this->mysqli = $mysqli->connectDatabase();
    }

    public function prepare($sql)
    {
        $this->objectMysqli = $this->mysqli->prepare($sql);
    }
    public function bindValue($key, $value)
    {
        $type = substr(gettype($value), 0, 1);
        $this->objectMysqli->bind_param($type, $value);
    }
    public function execute()
    {
        $this->objectMysqli->execute();
    }
    public function rowCount()
    {
        $this->objectMysqli->num_rows();
    }
    public function fetch()
    {
        $this->mysqli->get_result()->fetch_object();
    }
    public function fetchAll()
    {
        $data = [];
        $result = $this->objectMysqli->get_result();
        while ($resultFetch = $result->fetch_assoc()) {
            $data[] = $resultFetch;
        }

        return $data;
    }
}
