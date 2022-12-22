<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
      //Table Name
    protected $table = 'grid';

    //primary key
    public $primaryKey = 'grid_id';

    //TImestamps
    public $timestamps = true;
}
