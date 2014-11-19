<?php
abstract class AbstractCar extends AbstractVehicle {

	private $gearboxStrategy;
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
		
		// Starts in standard gearbox mode (more economical)
		$this->gearboxStrategy = new StandardGearboxStrategy();
	}
	
	// Allow the gearbox strategy to be changed...
	public function setGearboxStrategy(GearboxStrategy $gs) {
		$this->gearboxStrategy = $gs;
	}

	public function getGearboxStrategy() {
		return $this->gearboxStrategy;
	}

	public function setSpeed($speed) {
		// Delegate to strategy in effect...
		$this->gearboxStrategy->ensureCorrectGear($this->getEngine(), $speed);
	}
	
}
?>