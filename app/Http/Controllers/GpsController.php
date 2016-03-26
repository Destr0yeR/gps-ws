<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\TruckRepository;
use App\Repositories\PositionRepository;
use App\Http\Requests\UpdateLocationRequest;

class GpsController extends Controller
{
    //
	public function __construct(TruckRepository $truckRepository, PositionRepository $positionRepository){
        $this->repository = $truckRepository;
		$this->prepository = $positionRepository;
	}

    public function getLocations(){
    	$trucks = $this->repository->getAll();

    	return response()->json(['trucks' => $trucks]);
    }

    public function updateLocations(UpdateLocationRequest $request){

        $check = [
            'truck_id'        => $request->input('id')
        ];

    	$change = [
            'truck_id'        => $request->input('id'),
    		'latitude'	=> $request->input('latitude'),
    		'longitude'	=> $request->input('longitude')
    	];

    	$success = $this->prepository->updateOrCreate($check, $change);

    	return response()->json(['message' => 'OK']);
    }
}
