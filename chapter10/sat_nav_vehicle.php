<?php
class SatNavVehicle extends AbstractVehicleOption {
	
	public function __construct(Vehicle $vehicle) {
		parent::__construct($vehicle);
	}
	
	public function getPrice() {
		return $this->decoratedVehicle->getPrice() + 1500;
	}
	
	public function setDestination($target) {
		// code to set the destination...
	}

}
?>