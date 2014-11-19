<?php
class Registration {

	private $vehicle;
	
	public function __construct(Vehicle $vehicle) {
		$this->vehicle = $vehicle;
	}
	
	public function allocateLicensePlate() {
		// code omittted...
		return 'License plate allocated';
	}
	
	public function allocateVehicleNumber() {
		// code omittted...
		return 'Vehicle number allocated';
	}
	
}
?>