<?php

namespace App\Models\Site;

use App\Interfaces\ILogin;
use App\Models\Model;

class UserLoginModel extends Model implements ILogin
{
    public $table = "users";
}
