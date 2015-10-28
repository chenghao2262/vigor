<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SleepRecord extends Model
{
    protected $table = 'sleepRecords';

    protected $primaryKey = 'sleepRid';
}
