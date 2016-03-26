<?php

namespace App\Services\Truck;

use App\Services\Formater;

class TruckFormater extends Formater{

	public function __construct(){

		$fields = [
			[
				'format' 	=> 'id',
				'value'		=> 'id',
			],
			[
				'format'	=> 'code',
				'value'		=> 'number',
			]
		];

		parent::__construct($fields);
	}

	public function format_item($item){
		$_item = parent::format_item($item);

		$position = $item->position;

		if($item){
			$_item['position'] = [
				'longitude'	=> $position->longitude,
				'latitude'	=> $position->latitude
			];
		}else $_item['position'] = null;

		return $_item;
	}
}