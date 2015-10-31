<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'ArticlesID';

    public function scopeLatest($query){
        return $query->orderBy('created_at','desc');

    }
}
