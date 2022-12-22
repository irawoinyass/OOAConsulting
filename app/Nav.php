<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
       //Table Name
    protected $table = 'nav';

    //primary key
    public $primaryKey = 'nav_id';

    //TImestamps
    public $timestamps = true;
}
