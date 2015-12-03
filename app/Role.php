<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    public function permissions(){

        return $this->belongsToMany('App\Permission','permission_role');
    }
}
