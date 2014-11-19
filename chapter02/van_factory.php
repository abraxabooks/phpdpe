<?php
class VanFactory extends AbstractVehicleFactory {

	public function createBody() {
		return new VanBody();
	}
	
	public function createChassis() {
		return new VanChassis();
	}
	
	public function createWindows() {
		return new VanWindows();
	}
	
}
?>
