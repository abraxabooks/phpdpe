<?php
abstract class Item {

	private $description;
	private $cost;
	
	public function __construct($description, $cost) {
		$this->description = $description;
		$this->cost = $cost;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getCost() {
		return $this->cost;
	}
	
	public abstract function addItem(Item $item);
	public abstract function removeItem(Item $item);
	public abstract function getItems();
	
	public function __toString() {
		return $this->description . ' (cost = ' . $this->getCost() . ')';
	}
	
}
?>