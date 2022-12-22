<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topper extends Model
{
      //Table Name
    protected $table = 'topper';

    //primary key
    public $primaryKey = 'topper_id';

    //TImestamps
    public $timestamps = true;
}
