<?php
class VehicleManager {

	private $saloon;
	private $coupe;
	private $sport;
	private $boxVan;
	private $pickup;
	
	public function __construct() {
		// For simplicity all vehicles use same engine type...
		$this->saloon = new Saloon(new StandardEngine(1300));
		$this->coupe = new Coupe(new StandardEngine(1300));
		$this->sport = new Sport(new StandardEngine(1300));
		$this->boxVan = new BoxVan(new StandardEngine(1300));
		$this->pickup = new Pickup(new StandardEngine(1300));
	}
	
	public function createSaloon() {
		return clone $this->saloon;
	}
	
	public function createCoupe() {
		return clone $this->coupe;
	}
	
	public function createSport() {
		return clone $this->sport;
	}
	
	public function createBoxVan() {
		return clone $this->boxVan;
	}
	
	public function createPickup() {
		return clone $this->pickup;
	}
	
}
?>