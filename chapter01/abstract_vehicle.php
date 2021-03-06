<?php
abstract class AbstractVehicle implements Vehicle {

	private $engine;
	private $colour;
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		$this->engine = $engine;
		$this->colour = $colour;
	}
	
	public function getEngine() {
		return $this->engine;
	}
	
	public function getColour() {
		return $this->colour;
	}
	
	public function paint($colour) {
		$this->colour = $colour;
	}
	
	public function __toString() {
		return get_class($this) . ' (' . (string)$this->engine . ', ' . (string)$this->colour . ')';
	}
}
?>