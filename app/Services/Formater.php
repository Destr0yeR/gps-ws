<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Formater {

	public function __construct(array $fields){
		$this->fields = $fields;
	}

	public function format_collection(Model $collection){
		$items = [];

		foreach ($collection as $item) {
			$items[] = $this->format_item($item);
		}

		return $item;
	}

	public function format_item($item){
		$_item = [];

		foreach ($fields as $field) {
			$_item[($field['format'])] = $item->($field['value']);
		}

		return $_item;
	}
}