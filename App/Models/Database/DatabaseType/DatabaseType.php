<?php

namespace App\Models\Database\DatabaseType;


use App\Interfaces\ITypeDatabase;

class DatabaseType
{
    private $iTypeDatabase;

    public function __construct(ITypeDatabase $iTypeDatabase)
    {
        $this->iTypeDatabase = $iTypeDatabase;
    }

    public function getDatabase()
    {
        return $this->iTypeDatabase;
    }
}
