<?php

namespace App\Models\Database\DatabaseConnection;

use App\Interfaces\IDatabaseConnection;

class Connection
{
    private $iDatabaseConnection;
    public function __construct(IDatabaseConnection $iDatabaseConnection)
    {
        $this->iDatabaseConnection = $iDatabaseConnection;
    }

    public function connectDatabase()
    {
        return $this->iDatabaseConnection->connectDatabase();
    }
}
