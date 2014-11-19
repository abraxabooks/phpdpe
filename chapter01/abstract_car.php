<?php
abstract class AbstractCar extends AbstractVehicle {
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
	}
}
?>