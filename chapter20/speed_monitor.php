<?php
class SpeedMonitor implements Observer {

	private $speed_to_alert = 70;
	private $speeding = false;

	public function update(Observable $speedo) {
		if ($speedo->getCurrentSpeed() > $this->speed_to_alert):
			$this->speeding = true;
		else:
			$this->speeding = false;
		endif;
	}
	
	public function isSpeeding() {
		return $this->speeding;
	}
}
?>