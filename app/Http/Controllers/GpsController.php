<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\TruckRepository;
use App\Http\Requests\UpdateLocationRequest;

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

    public function updateLocations(UpdateLocationRequest $request){
    	$input = [
    		'id'		=> $request->input('id'),
    		'latitude'	=> $request->input('latitude'),
    		'longitude'	=> $request->input('longitude')
    	];

    	$success = $this->repository->update($input);

    	return response()->json(['message' => 'OK']);
    }
}
