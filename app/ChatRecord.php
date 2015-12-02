<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRecord extends Model
{
    protected  $table = 'chatRecords';

    protected $primaryKey = 'chatId';
}
