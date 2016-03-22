<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    //
    public function position(){
    	return $this->hasOne('App\Models\Position');
    }
}
