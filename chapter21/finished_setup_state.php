<?php
class FinishedSetupState implements ClockSetupState {

	private $clockSetup;
	
	public function __construct(ClockSetup $clockSetup) {
		$this->clockSetup = $clockSetup;
	}

	public function previousValue() {
		// No op
	}
	
	public function nextValue() {
		// No op
	}
	
	public function selectValue() {
		// No op
	}

	public function getInstructions() {
		return 'Press knob to view selected date...';
	}
	
	public function getSelectedValue() {
		// No op
	}

}
?>