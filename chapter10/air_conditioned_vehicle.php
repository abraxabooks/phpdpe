<?php
class AirConditionedVehicle extends AbstractVehicleOption {
	
	public function __construct(Vehicle $vehicle) {
		parent::__construct($vehicle);
	}
	
	public function getPrice() {
		return $this->decoratedVehicle->getPrice() + 600;
	}
	
	public function setTemperature($value) {
		// code to set the temperature...
	}
	
}
?>