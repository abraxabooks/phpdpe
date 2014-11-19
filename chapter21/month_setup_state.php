<?php
class MonthSetupState implements ClockSetupState {

	private $clockSetup;
	private $month;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
		$this->month = date('n'); // default to current month
	}

	public function previousValue() {
		if ($this->month > 1):
			$this->month--;
		endif;
	}
	
	public function nextValue() {
		if ($this->month < 12):
			$this->month++;
		endif;
	}
	
	public function selectValue() {
		// Transition to next state
		$this->clockSetup->setState($this->clockSetup->getDaySetupState());
	}

	public function getInstructions() {
		return 'Please set the month...';
	}
	
	public function getSelectedValue() {
		return $this->month;
	}

}
?>