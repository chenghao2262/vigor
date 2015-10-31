<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $table = 'experts';

    protected $primaryKey = 'name';

    public function scopeLatest($query){
        return $query->orderBy('created_at','desc');

    }

    public function articles(){
        return $this->hasMany('App\Article','expertName','name');
    }

    public function availableTime(){
        return $this->hasMany('App\AvailableTime','expertName','name');
    }
}
