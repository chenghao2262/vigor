<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    protected $table = 'healthRecords';

    protected $primaryKey = 'healthRid';
}
