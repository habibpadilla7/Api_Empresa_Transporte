<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverVehicle extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $table = 'driver_vehicle';

    public function vehicle(){
        return $this->belongsTo('App\Vehicle');
    }

}
