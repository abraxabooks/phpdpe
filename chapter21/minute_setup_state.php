<?php
class MinuteSetupState implements ClockSetupState {

	private $clockSetup;
	private $minute;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
		$this->minute = date('i'); // default to current minute
	}

	public function previousValue() {
		if ($this->minute > 0):
			$this->minute--;
		endif;
	}
	
	public function nextValue() {
		if ($this->minute < 59):
			$this->minute++;
		endif;
	}
	
	public function selectValue() {
		// Transition to next state
		$this->clockSetup->setState($this->clockSetup->getFinishedSetupState());
	}

	public function getInstructions() {
		return 'Please set the minute...';
	}
	
	public function getSelectedValue() {
		return $this->minute;
	}

}
?>