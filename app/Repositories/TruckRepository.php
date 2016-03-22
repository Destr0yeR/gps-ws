<?php

namespace App\Repositories;

use App\Repositories\Repository;

use App\Models\Truck;
use App\Services\Truck\TruckFormater;

class TruckRepository extends Repository{

	public function __construct(TruckFormater $formater){
		$this->model = Truck::distinct();
		$this->formater = $formater;

		parent::__construct($this->model, $this->formater);
	}
}