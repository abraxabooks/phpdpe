<?php
class AutomaticGearbox implements Observer {

	private $gear = false;

	public function update(Observable $speedo) {
		if ($speedo->getCurrentSpeed() <= 10):
			$this->gear = 1;

		elseif ($speedo->getCurrentSpeed() <= 20):
			$this->gear = 2;

		elseif ($speedo->getCurrentSpeed() <= 30):
			$this->gear = 3;		
			
		else:
			$this->gear = 4;
		endif;
	}
	
	public function getGear() {
		return $this->gear;
	}
}
?>