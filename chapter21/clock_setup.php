<?php
class ClockSetup {

	// The various states the setup can be in...
	private $yearState;
	private $monthState;
	private $dayState;
	private $hourState;
	private $minuteState;
	private $finishedState;
	
	// The current state we are in...
	private $currentState;
	
	public function __construct() {
		$this->yearState = new YearSetupState($this);
		$this->monthState = new MonthSetupState($this);
		$this->dayState = new DaySetupState($this);
		$this->hourState = new HourSetupState($this);
		$this->minuteState = new MinuteSetupState($this);
		$this->finishedState = new FinishedSetupState($this);
		
		// Initioal state is to set the year.
		$this->setState($this->yearState);
	}
	
	public function setState(ClockSetupState $state) {
		$this->currentState = $state;
	}
	
	public function rotateKnobLeft() {
		$this->currentState->previousValue();
	}
	
	public function rotateKnobRight() {
		$this->currentState->nextValue();
	}
	
	public function pushKnob() {
		$this->currentState->selectValue();
	}
	
	public function getYearSetupState() {
		return $this->yearState;
	}
	
	public function getMonthSetupState() {
		return $this->monthState;
	}
	
	public function getDaySetupState() {
		return $this->dayState;
	}
	
	public function getHourSetupState() {
		return $this->hourState;
	}
	
	public function getMinuteSetupState() {
		return $this->minuteState;
	}
	
	public function getFinishedSetupState() {
		return $this->finishedState;
	}
	
	public function getSelectedDate() {
		$time = mktime($this->hourState->getSelectedValue(),
					   $this->minuteState->getSelectedValue(),
					   0,
					   $this->monthState->getSelectedValue(),
					   $this->dayState->getSelectedValue(),
					   $this->yearState->getSelectedValue()
					   );
		return date('r', $time);
	}

}
?>