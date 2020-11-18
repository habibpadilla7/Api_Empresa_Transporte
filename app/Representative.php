<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    protected $hidden = ['created_at','updated_at'];
    protected $guarded=[];
}
