<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverVehicle extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $table = 'driver_vehicle';
    protected $fillable = array('vehicle_id', 'driver_id');

    public function vehicle(){
        return $this->belongsTo('App\Vehicle');
    }

}
