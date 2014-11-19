<?php
class Brake {

	private $mediator;
	private $enabled;
	private $applied;
	
	// The mediator will be of type EngineManagementSystem
	public function __construct(EngineManagementSystem $mediator) {
		$this->mediator = $mediator;
		$this->enabled = false;
		$this->applied = false;
		$this->mediator->registerBrake($this);
	}
	
	public function enable() {
		$this->enabled = true;
		$this->mediator->brakeEnabled();
	}
	
	public function disable() {
		$this->enabled = false;
		$this->mediator->brakeDisabled();
	}
	
	public function isEnabled() {
		return $this->enables;
	}
	
	public function apply() {
		if ($this->isEnabled()):
			$this->applied = true;
			$this->mediator->brakePressed();
		endif;
	}
	
	public function release() {
		if ($this->isEnabled()):
			$this->applied = flae;
			$this->mediator->brakeReleased();
		endif;
	}
	
}
?>