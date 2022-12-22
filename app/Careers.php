<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
             //Table Name
    protected $table = 'careers';

    //primary key
    public $primaryKey = 'careers_id';

    //TImestamps
    public $timestamps = true;
}
