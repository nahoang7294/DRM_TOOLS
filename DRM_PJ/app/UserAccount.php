<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    protected $table = "user_account";

    public function statistic(){
        return $this->hasMany('App\Statistic', 'user_id', 'id'); //duong dan, khoa ngoai, khoa chinh
    }

    public function accounting(){
        return $this->hasMany('App\Accounting', 'user_id', 'id'); //duong dan, khoa ngoai, khoa chinh
    }
}
