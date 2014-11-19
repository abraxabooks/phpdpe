<?php
class NullObjectLight implements WarningLight {


	public function turnOn() {
		// Do nothing...
	}
	
	public function turnOff() {
		// Do nothing...
	}
	
	public function isOn() {
		return false;
	}
}
?>