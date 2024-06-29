<?php

namespace App\Models\Database\DatabaseConnection;

use App\Interfaces\IDatabaseConnection;
use PDO;

class DbPdo implements IDatabaseConnection
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=sro_admin", "root", "admin");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function connectDatabase()
    {
        return $this->pdo;
    }
}
