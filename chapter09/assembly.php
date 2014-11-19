<?php
class Assembly extends Item {

	private $items = array();
	
	public function __construct($description) {
		parent::__construct($description, 0);
	}
	
	public function addItem(Item $item) {
		array_push($this->items, $item);
	}
	
	public function removeItem(Item $item) {
		unset($this->items[$item]);
	}
	
	public function getItems() {
		return $this->items;
	}
	
	// Also have to override getCost() to add cost of sub-items
	public function getCost() {
		$total = 0;
		foreach ($this->items as $item):
			$total += $item->getCost();
		endforeach;
		return $total;
	}
	
}
?>