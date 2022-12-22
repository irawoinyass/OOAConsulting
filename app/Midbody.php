<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midbody extends Model
{
       //Table Name
    protected $table = 'mid_body';

    //primary key
    public $primaryKey = 'mid_body_id';

    //TImestamps
    public $timestamps = true;
}
