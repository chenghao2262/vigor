<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTime extends Model
{
    protected $table = 'availableTime';

    protected $primaryKey = 'ATimeID';

    protected $fillable = ['expertName', 'date','segment'];
}
