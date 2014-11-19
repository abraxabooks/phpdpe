<?php
class Gearbox {

	const NEUTRAL	= 'N';
	const FIRST		= '1';
	const SECOND	= '2';
	const THIRD		= '3';
	const FOURTH	= '4';
	const FIFTH		= '5';
	const REVERSE	= 'R';

	private $mediator;
	private $enabled;
	private $currentGear;
	
	// The mediator will be of type EngineManagementSystem
	public function __construct(EngineManagementSystem $mediator) {
		$this->mediator = $mediator;
		$this->enabled = false;
		$this->currentGear = Gearbox::NEUTRAL;
		$this->mediator->registerGearbox($this);
	}
	
	public function enable() {
		$this->enabled = true;
		$this->mediator->gearEnabled();
	}
	
	public function disable() {
		$this->enabled = false;
		$this->mediator->gearDisabled();
	}
	
	public function isEnabled() {
		return $this->enables;
	}
	
	public function setGear($gear) {
		if (($this->isEnabled()) and ($this->getGear() != $gear)):
			$this->currentGear = $gear;
			$this->mediator->gearChanged();
		endif;
	}
	
	public function getGear() {
		return $this->currentGear;
	}
	
}
?>