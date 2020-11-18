<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded=[];
}
