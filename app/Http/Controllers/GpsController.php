<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GpsController extends Controller
{
    //
    public function getLocations(){
    	

    	return response()->json(['trucks' => $trucks]);
    }

    public function updateLocations(Request $request){

    }
}
