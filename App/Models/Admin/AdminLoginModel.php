<?php

namespace App\Models\Site;

use App\Interfaces\ILogin;
use App\Models\Model;

class AdminLoginModel extends Model implements ILogin
{
    public $table = "users";
}
