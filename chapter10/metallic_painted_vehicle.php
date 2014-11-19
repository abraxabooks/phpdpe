<?php
class MetallicPaintedVehicle extends AbstractVehicleOption {
	
	public function __construct(Vehicle $vehicle) {
		parent::__construct($vehicle);
	}
	
	public function getPrice() {
		return $this->decoratedVehicle->getPrice() + 750;
	}

}
?>