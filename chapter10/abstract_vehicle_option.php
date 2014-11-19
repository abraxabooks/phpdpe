<?php
abstract class AbstractVehicleOption extends AbstractVehicle {

	protected $decoratedVehicle;
	
	public function __construct(Vehicle $vehicle) {
		parent::__construct($vehicle->getEngine(), $vehicle->getColour());
		$this->decoratedVehicle = $vehicle;
	}

}
?>