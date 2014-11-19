<?php
class VehicleFacade {

	public static function prepareForSale(Vehicle $vehicle) {
		$registration = new Registration($vehicle);
		$registration->allocateVehicleNumber();
		$registration->allocateLicensePlate();
		
		Documentation::printBrochure($vehicle);
		
		$vehicle->cleanInterior();
		$vehicle->cleanExteriorBody();
		$vehicle->polishWindows();
		$vehicle->takeForTestDrive();
		
		return 'Vehicle prepared for sale';
	}
}
?>