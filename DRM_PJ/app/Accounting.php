<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    protected $table = "accounting";

    public function user_account(){
        return $this->beLongsTo('App\UserAccount', 'user_id', 'id');
    }

    public function system_account(){
        return $this->beLongsTo('App\SystemAccount', 'admin_id', 'id');
    }

}
