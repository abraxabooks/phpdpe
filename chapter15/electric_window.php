<?php
class ElectricWindow {

	private $open;
	
	public function __construct() {
		$this->open = false;
	}
	
	public function isOpen() {
		return $this->open;
	}
	
	public function isClosed() {
		return (! $this->open);
	}
	
	public function openWindow() {
		if ($this->isClosed()):
			$this->open = true;
			return 'Window is now open';
		endif;
	}
	
	public function closeWindow() {
		if ($this->isOpen()):
			$this->open = false;
			return 'Window is now closed';
		endif;
	}
	
}
?>