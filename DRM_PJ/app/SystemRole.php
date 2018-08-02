<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
    protected $table = "system_role";

    public function system_account(){
        return $this->hasMany('App\SystemAccount', 'role_id', 'id');
    }

}
