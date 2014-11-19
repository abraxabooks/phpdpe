<?php
class Speedometer {

	private $currentSpeed;
	private $previousSpeed;

	public function __construct() {
		$this->currentSpeed = 0;
		$this->previousSpeed = 0;
	}
	
	public function setCurrentSpeed($speed) {
		$this->previousSpeed = $this->currentSpeed;
		$this->currentSpeed = $speed;
	}
	
	public function getCurrentSpeed() {
		return $this->currentSpeed;
	}

	// Only defined to help testing
	public function getPreviousSpeed() {
		return $this->previousSpeed;
	}
	
}
?>