<?php

namespace App\Models\Database\DatabaseConnection;

use App\Interfaces\IDatabaseConnection;
use mysqli;

class DbMysqli implements IDatabaseConnection
{

    private $db;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "root", "sro_admin");
    }

    public function connectDatabase()
    {
        return $this->db;
    }
}
