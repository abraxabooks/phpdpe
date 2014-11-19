<?php
class VanDirector extends VehicleDirector {

	public function build(VehicleBuilder $vehicle_builder) {
		$vehicle_builder->buildChassis();
		$vehicle_builder->buildBody();
		$vehicle_builder->buildReinforcedStorageArea();
		$vehicle_builder->buildWindows();
		
		return $vehicle_builder->getVehicle();
	}

}
?>
