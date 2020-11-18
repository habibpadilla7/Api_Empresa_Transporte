<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded=[];

   /* public function drivers()
    {
        return $this->belongsToMany(Driver::class);
    }*/
    public function drivervehicles()
    {
        return  $this->hasMany('App\DriverVehicle','vehicle_id');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
