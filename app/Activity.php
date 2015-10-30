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
}
