<?php
class SuperGreenEngine {

	private $size;

	public function __construct($size) {
		$this->size = $size;
	}
	
	public function getEngineSize() {
		return $this->size;
	}
	
	public function __toString() {
		return "SUPER ENGINE {$this->size}";
	}

}
?>