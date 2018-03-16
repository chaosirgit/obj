<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Admin extends Model
{
    public $timestamps = false;
    protected $table = 'admin';
    protected $hidden = ['password'];

    public static function setPass($password){
        return md5(md5($password).env('PASSWORD_SALE','chaosir'));
    }
}
