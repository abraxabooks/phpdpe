<?php
abstract class VehicleBuilder {

	public function buildBody() {}
	public function buildBoot() {}
	public function buildChassis() {}
	public function buildPassengerArea() {}
	public function buildReinforcedStorageArea() {}
	public function buildWindows() {}

	public abstract function getVehicle();
	
}
?>
