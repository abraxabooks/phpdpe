<?php
class CarFactory extends AbstractVehicleFactory {

	public function createBody() {
		return new CarBody();
	}
	
	public function createChassis() {
		return new CarChassis();
	}
	
	public function createWindows() {
		return new CarWindows();
	}
	
}
?>
