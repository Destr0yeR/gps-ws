<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class Formater {

	public function __construct(array $fields){
		$this->fields = $fields;
	}

	public function format_collection(Collection $collection){
		$items = [];

		foreach ($collection as $item) {
			$items[] = $this->format_item($item);
		}

		return $items;
	}

	public function format_item($item){
		$_item = [];

		foreach ($this->fields as $field) {
			$_item[$field['format']] = $item->$field['value'];
		}

		return $_item;
	}
}