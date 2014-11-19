<?php
class Radio {
	
	const MIN_VOLUME		= 0;
	const MAX_VOLUME		= 10;
	const DEFAULT_VOLUME	= 5;
	
	private $on;
	private $volume;
	
	public function __construct() {
		$this->on = false;
		$this->volume = Radio::DEFAULT_VOLUME;
	}
	
	public function isOn() {
		return $this->on;
	}
	
	public function getVolume() {
		return $this->volume;
	}
	
	public function on() {
		$this->on = true;
		return 'Radio now on, volume levek ' . $this->getVolume();
	}
	
	public function off() {
		$this->on = false;
		return 'Radio is now off';
	}
	
	public function volumeUp() {
		if ($this->isOn()):
			if ($this->getVolume() < Radio::MAX_VOLUME):
				$this->volume++;
				return 'Volume turned up to level ' + $this->getVolume();
			endif;		
		endif;
	}
	
	public function volumeDown() {
		if ($this->isOn()):
			if ($this->getVolume() > Radio::MIN_VOLUME):
				$this->volume--;
				return 'Volume turned down to level ' + $this->getVolume();
			endif;		
		endif;
	}
	
}
?>