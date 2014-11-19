<?php
class Speedometer extends Observable {

	private $currentSpeed;
	
	public function __construct() {
		$this->currentSpeed = 0;
	}
	
	public function setCurrentSpeed($speed) {
		$this->currentSpeed = $speed;
		
		// Tell all observers so they know speed has changed...
		$this->setChanged();
		$this->notifyObservers();
	}
	
	public function getCurrentSpeed() {
		return $this->currentSpeed;
	}
}
?>