<?php

namespace App\Services\Truck;

use App\Services\Formater;

class PositionFormater extends Formater{

	public function __construct(){

		$fields = [
			[
				'format' 	=> 'id',
				'value'		=> 'id',
			],
			[
				'format'	=> 'latitude',
				'value'		=> 'latitude',
			],
			[
				'format'	=> 'longitude',
				'value'		=> 'longitude',
			]
		];

		parent::__construct($fields);
	}
}