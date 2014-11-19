<?php
class Accelerator {

	private $mediator;
	private $enabled;
	private $speed;
	
	// The mediator will be of type EngineManagementSystem
	public function __construct(EngineManagementSystem $mediator) {
		$this->mediator = $mediator;
		$this->enabled = false;
		$this->speed = 0;
		$this->mediator->registerAccelerator($this);
	}
	
	public function enable() {
		$this->enabled = true;
		$this->mediator->acceleratorEnabled();
	}
	
	public function disable() {
		$this->enabled = false;
		$this->mediator->acceleratorDisabled();
	}
	
	public function isEnabled() {
		return $this->enables;
	}
	
	public function accelerateToSpeed($speed) {
		if ($this->isEnabled()):
			$this->speed = $speed;
			$this->mediator->acceleratorPressed();
		endif;
	}
	
	public function getSpeed() {
		return $this->speed;
	}
	
}
?>