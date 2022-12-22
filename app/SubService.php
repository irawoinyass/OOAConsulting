<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
                //Table Name
    protected $table = 'sub_service';

    //primary key
    public $primaryKey = 'sub_service_id';

    //TImestamps
    public $timestamps = true;
}
