<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Services\Filterer;
use App\Services\Formater;

class Repository {

	public function __construct(Model $model,
								Formater $formater){

		$this->model = $model;
		$this->formater = $formater;
	}

	public function getAll(){
		$collection = $this->model->all();
		return $this->formater->format_collection($collection);
	}
}