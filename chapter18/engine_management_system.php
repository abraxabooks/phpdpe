<?php
class EngineManagementSystem {

	private $ignition;
	private $gearbox;
	private $accelerator;
	private $brake;
	
	private $currentSpeed;
	
	public function __construct() {
		$this->currentSpeed = 0;
	}

	// Functions that enable registration with this mediator...
	
	public function registerIgnition(Ignition $ignition) {
		$this->ignition = $ignition;
	}
	
	public function registerGearbox(Gearbox $gearbox) {
		$this->gearbox = $gearbox;
	}
	
	public function registerAccelerator(Accelerator $accelerator) {
		$this->accelerator = $accelerator;
	}
	
	public function registerBrake(Brake $brake) {
		$this->brake = $brake;
	}
	
	// Functions that handle object interactions...
	
	public function ignitionTurnedOn() {
		$this->gearbox->enable();
		$this->accelerator->enable();
		$this->brake->enable();
	}
	
	public function ignitionTurnedOff() {
		$this->gearbox->disable();
		$this->accelerator->disable();
		$this->brake->disable();
	}
	
	public function gearboxEnabled() {
		// code...
	}
	
	public function gearboxDisabled() {
		// code...
	}
	
	public function gearChanged() {
		// code...
	}
	
	public function acceleratorEnabled() {
		// code...
	}
	
	public function acceleratorDisabled() {
		// code...
	}
	
	public function acceleratorPressed() {
		$this->brake->disable();
		while ($this->currentSpeed < $this->accelerator->getSpeed()):
			$this->currentSpeed++;
			
			// Set gear according to speed...
			if ($this->currentSpeed <= 10):
				$this->gearbox->setGear(Gearbox::FIRST);
			
			elseif ($this->currentSpeed <= 20):
				$this->gearbox->setGear(Gearbox::SECOND);
			
			elseif ($this->currentSpeed <= 20):
				$this->gearbox->setGear(Gearbox::FIRST);
			
			elseif ($this->currentSpeed <= 30):
				$this->gearbox->setGear(Gearbox::THIRD);
			
			elseif ($this->currentSpeed <= 50):
				$this->gearbox->setGear(Gearbox::FOURTH);
			
			else:
				$this->gearbox->setGear(Gearbox::FIFTH);
			
			endif;
		endwhile;
		$this->brake->enable();
	}
	
	public function brakeEnabled() {
		// code...
	}
	
	public function brakeDisabled() {
		// code...
	}
	
	public function brakePressed() {
		$this->accelerator->disable();
		$this->currentSpeed = 0;
	}
	
	public function brakeReleased() {
		$this->gearbox->setGear(Gearbox::FIRST);
		$this->accelerator->enable();
	}
	
}
?>