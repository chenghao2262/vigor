<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $primaryKey = 'activityID';

    protected $fillable = ['activityID','name', 'describe','location','"founderName','end','portrait'];



    public function scopeLatest($query){
        return $query->orderBy('created_at','desc');
    }

    public function participants(){
        return $this->belongsToMany('App\User','activity_user','activity_id','userName');

    }
}
