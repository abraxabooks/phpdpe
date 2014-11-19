<?php
class YearSetupState implements ClockSetupState {

	private $clockSetup;
	private $year;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
		$this->year = date('Y'); // default to current year
	}

	public function previousValue() {
		$this->year--;
	}
	
	public function nextValue() {
		$this->year++;
	}
	
	public function selectValue() {
		// Transition to next state
		$this->clockSetup->setState($this->clockSetup->getMonthSetupState());
	}

	public function getInstructions() {
		return 'Please set the year...';
	}
	
	public function getSelectedValue() {
		return $this->year;
	}

}
?>