<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
            //Table Name
    protected $table = 'service';

    //primary key
    public $primaryKey = 'service_id';

    //TImestamps
    public $timestamps = true;


  public function sub()
    {
        return $this->hasMany('App\SubService', 's_s_id' ,'service_id');
    }






}
