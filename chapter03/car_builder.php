<?php
class CarBuilder extends VehicleBuilder {

	private $carInProgress ;
	
	public function __construct(AbstractCar $abstract_car) {
		$this->carInProgress = $abstract_car;
	}

	public function buildBody() {
		// Add body to $this->carInProgress
	}
	
	public function buildBoot() {
		// Add boot to $this->carInProgress
	}
	
	public function buildChassis() {
		// Add chassis to $this->carInProgress
	}
	
	public function buildPassengerArea() {
		// Add passenger area to $this->carInProgress
	}
	
	public function buildWindows() {
		// Add windows to $this->carInProgress
	}

	public function getVehicle() {
		return $this->carInProgress;
	}
	
}
?>
