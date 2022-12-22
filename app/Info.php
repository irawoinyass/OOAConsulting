<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
        //Table Name
    protected $table = 'info';

    //primary key
    public $primaryKey = 'info_id';

    //TImestamps
    public $timestamps = true;
}
