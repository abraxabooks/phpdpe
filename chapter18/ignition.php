<?php
class Ignition {

	private $mediator;
	private $on;
	
	// The mediator will be of type EngineManagementSystem
	public function __construct(EngineManagementSystem $mediator) {
		$this->mediator = $mediator;
		$this->on = false;
		
		// Register back with the mediator
		$this->mediator->registerIgnition($this);
	}
	
	public function start() {
		$this->on = true;
		$this->mediator->ignitionTurnedOn();
	}
	
	public function stop() {
		$this->on = false;
		$this->mediator->ignitionTurnedOff();
	}
	
	public function isOn() {
		return $this->on;
	}
	
}
?>