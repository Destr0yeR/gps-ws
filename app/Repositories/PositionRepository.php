<?php

namespace App\Repositories;

use App\Repositories\Repository;

use App\Models\Position;
use App\Services\Truck\PositionFormater;

class PositionRepository extends Repository{
	public function __construct(PositionFormater $formater){
		$this->model = Position::distinct();
		$this->formater = $formater;

		parent::__construct($this->model, $this->formater);
	}
}