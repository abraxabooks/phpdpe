<?php
class VehicleManagerLazy {

	private $saloon;
	private $coupe;
	private $sport;
	private $boxVan;
	private $pickup;
	
	public function __construct() {
	}
	
	public function createSaloon() {
		if (empty($this->saloon)):
			$this->saloon = new Saloon(new StandardEngine(1300));
		endif;
		return clone $this->saloon;
	}
	
	public function createCoupe() {
		if (empty($this->coupe)):
			$this->coupe = new Coupe(new StandardEngine(1300));
		endif;
		return clone $this->coupe;
	}
	
	public function createSport() {
		if (empty($this->sport)):
			$this->sport = new Sport(new StandardEngine(1300));
		endif;
		return clone $this->sport;
	}
	
	public function createBoxVan() {
		if (empty($this->boxVan)):
			$this->boxVan = new BoxVan(new StandardEngine(1300));
		endif;
		return clone $this->boxVan;
	}
	
	public function createPickup() {
		if (empty($this->pickup)):
			$this->pickup = new Pickup(new StandardEngine(1300));
		endif;
		return clone $this->pickup;
	}
	
}
?>