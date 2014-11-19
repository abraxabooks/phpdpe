<?php
class Sport extends AbstractCar {
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
	}
	
	public function getPrice() {
		return 8000;
	}
	
}
?>