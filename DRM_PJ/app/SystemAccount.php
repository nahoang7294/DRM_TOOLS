<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemAccount extends Model
{
    protected $table = "system_account";

    public function accounting(){
        return $this->hasMany('App\Accounting', 'admin_id', 'id');
    }

    public function system_role(){
        return $this->beLongsTo('App\SystemRole', 'role_id', 'id');
    }
}
