<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $fillable = ['truck_id', 'latitude', 'longitude'];
    public function truck(){
    	return $this->belongsTo('App\Models\Truck');
    }
}
