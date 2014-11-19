<?php
class VanRange implements IteratorAggregate {
	
	private $vans = array();
	
	public function __construct() {
		$this->vans[0] = new BoxVan(new StandardEngine(1600));
		$this->vans[1] = new BoxVan(new StandardEngine(2000));
		$this->vans[2] = new Pickup(new TurboEngine(2200));
	}

	public function getIterator() {
		return new ArrayIterator($this->vans);
	}
	
}
?>