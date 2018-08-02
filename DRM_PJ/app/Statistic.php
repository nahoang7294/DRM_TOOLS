<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = "statistic";

    public function user_account(){
        return $this->beLongsTo('App\UserAccount', 'user_id', 'id');
    }
}
