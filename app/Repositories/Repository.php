<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use App\Services\Filterer;
use App\Services\Formater;

class Repository {

	public function __construct(Builder $model,
								Formater $formater){

		$this->model = $model;
		$this->formater = $formater;
	}

	public function getAll(){
		$collection = $this->model->get();
		
		return $this->formater->format_collection($collection);
	}
}