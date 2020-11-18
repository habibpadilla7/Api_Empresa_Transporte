<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded=[];
    public function driver_vehicle()
    {
    
        return  $this->hasMany('App\DriverVehicle','driver_id');
    }
    
}
