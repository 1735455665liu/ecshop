<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public $table="shop_user";
    public $timestamps=false;
    public $primaryKey="user_id";
}
