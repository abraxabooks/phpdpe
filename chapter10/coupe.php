<?php
class Coupe extends AbstractCar {
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
	}
	
	public function getPrice() {
		return 7000;
	}
	
}
?>