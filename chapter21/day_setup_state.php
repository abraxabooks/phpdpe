<?php
class DaySetupState implements ClockSetupState {

	private $clockSetup;
	private $day;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
		$this->day = date('j'); // default to current day
	}

	public function previousValue() {
		if ($this->day > 1):
			$this->day--;
		endif;
	}
	
	public function nextValue() {
		if ($this->day < date('t')):
			$this->day++;
		endif;
	}
	
	public function selectValue() {
		// Transition to next state
		$this->clockSetup->setState($this->clockSetup->getHourSetupState());
	}

	public function getInstructions() {
		return 'Please set the day...';
	}
	
	public function getSelectedValue() {
		return $this->day;
	}

}
?>