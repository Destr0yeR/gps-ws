<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    public function truck(){
    	return $this->belongsTo('App\Models\Truck');
    }
}
