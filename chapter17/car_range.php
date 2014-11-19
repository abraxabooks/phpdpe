<?php
class CarRange implements Iterator {
	
	private $cars = array();
	private $index = 0;
	
	public function __construct() {
		$this->cars[0] = new Saloon(new StandardEngine(1300));
		$this->cars[1] = new Saloon(new StandardEngine(1600));
		$this->cars[2] = new Coupe(new StandardEngine(2000));
		$this->cars[3] = new Sport(new TurboEngine(2500));
	}
	
	public function rewind() {
		return $this->index = 0;
	}
	
	public function valid() {
		return isset($this->cars[$this->index]);
	}
	
	public function current() {
		return $this->cars[$this->index];
	}
	
	public function key() {
		return $this->index;
	}
	
	public function next() {
		$this->index++;
	}
	
}
?>