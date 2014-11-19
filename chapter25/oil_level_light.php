<?php
class OilLevelLight implements WarningLight {

	private $on;

	public function turnOn() {
		$this->on = true;
	}
	
	public function turnOff() {
		$this->on = false;
	}
	
	public function isOn() {
		return $this->on;
	}
}
?>