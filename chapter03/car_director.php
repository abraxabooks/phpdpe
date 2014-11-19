<?php
class CarDirector extends VehicleDirector {

	public function build(VehicleBuilder $vehicle_builder) {
		$vehicle_builder->buildChassis();
		$vehicle_builder->buildBody();
		$vehicle_builder->buildPassengerArea();
		$vehicle_builder->buildBoot();
		$vehicle_builder->buildWindows();
		
		return $vehicle_builder->getVehicle();
	}

}
?>
