<?php
abstract class AbstractDriverControls {
	
	private $engine;
	
	public function __construct(Engine $engine) {
		$this->engine = $engine;
	}
	
	public function ignitionOn() {
		$this->engine->start();
	}
	
	public function ignitionOff() {
		$this->engine->stop();
	}
	
	public function accelerate() {
		$this->engine->increasePower();
	}
	
	public function brake() {
		$this->engine->decreasePower();
	}
	
}
?>