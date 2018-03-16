<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class User extends Model
{
    protected $table = 'user';
    protected $hidden = ['password'];
    protected $appends = ['gender_name'];

    public static function setPass($password){
        return md5(md5($password).env('PASSWORD_SALE','chaosir'));
    }

    public function getGenderNameAttribute(){
        if($this->attributes['gender'] == 0){
            return '女';
        }else{
            return '男';
        }
    }
}
