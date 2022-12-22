<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
          //Table Name
    protected $table = 'aboutus';

    //primary key
    public $primaryKey = 'aboutus_id';

    //TImestamps
    public $timestamps = true;
}
