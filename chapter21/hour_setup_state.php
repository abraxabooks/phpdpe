<?php
class HourSetupState implements ClockSetupState {

	private $clockSetup;
	private $hour;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
		$this->hour = date('G'); // default to current hour
	}

	public function previousValue() {
		if ($this->hour > 0):
			$this->hour--;
		endif;
	}
	
	public function nextValue() {
		if ($this->hour < 23):
			$this->hour++;
		endif;
	}
	
	public function selectValue() {
		// Transition to next state
		$this->clockSetup->setState($this->clockSetup->getMinuteSetupState());
	}

	public function getInstructions() {
		return 'Please set the hour...';
	}
	
	public function getSelectedValue() {
		return $this->hour;
	}

}
?>