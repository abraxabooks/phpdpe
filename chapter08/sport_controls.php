<?php
class SportControls extends AbstractDriverControls {
	
	public function __construct(Engine $engine) {
		parent::__construct($engine);
	}
	
	public function accelerateHard() {
		$this->accelerate();
		$this->accelerate();
	}
	
}
?>