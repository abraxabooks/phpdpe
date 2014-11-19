<?php
abstract class VehicleFactory {

	const CAR			= "Car";
	const VAN			= "Van";

	const ECONOMICAL	= "Economical";
	const MIDRANGE		= "Midrange";
	const POWERFUL		= "Powerful";
	
	public static function make($vehicle_type, $driving_style, $colour) {
		if ($vehicle_type == VehicleFactory::CAR):
			$factory = new CarFactory();
		else:
			$factory = new VanFactory();
		endif;
		
		return $factory->build($driving_style, $colour);
	}
	
	public function build($driving_style, $colour) {
		$vehicle = $this->selectVehicle($driving_style);
		$vehicle->paint($colour);
		return $vehicle;
	}
	
	// This is the "factory method"
	protected abstract function selectVehicle($driving_style);
	
}
?>
