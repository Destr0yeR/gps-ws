<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\TruckRepository;

class GpsController extends Controller
{
    //
	public function __construct(TruckRepository $truckRepository){
		$this->repository = $truckRepository;
	}

    public function getLocations(){
    	$trucks = $this->repository->getAll();

    	return response()->json(['trucks' => $trucks]);
    }

    public function updateLocations(Request $request){

    }
}
