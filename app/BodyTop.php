<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyTop extends Model
{
          //Table Name
    protected $table = 'body_top';

    //primary key
    public $primaryKey = 'body_top_id';

    //TImestamps
    public $timestamps = true;
}
