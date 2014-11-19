<?php
class VanBuilder extends VehicleBuilder {

	private $vanInProgress;
	
	public function __construct(AbstractVan $abstract_van) {
		$this->vanInProgress = $abstract_van;
	}

	public function buildBody() {
		// Add body to $this->vanInProgress
	}
	
	public function buildChassis() {
		// Add chassis to $this->vanInProgress
	}
	
	public function buildReinforcedStorageArea() {
		// Add reinforced storage area to $this->vanInProgress
	}
	
	public function buildWindows() {
		// Add windows to $this->vanInProgress
	}

	public function getVehicle() {
		return $this->vanInProgress;
	}
	
}
?>
