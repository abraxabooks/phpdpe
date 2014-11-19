<?php
abstract class AbstractEngine implements Engine {

	private $size;
	private $turbo;
	private $running;
	private $power;
	
	public function __construct($size, $turbo) {
		$this->size = $size;
		$this->turbo = $turbo;
		$this->running = false;
		$this->power = 0;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function isTurbo() {
		return $this->turbo;
	}
	
	public function start() {
		$this->running = true;
	}
	
	public function stop() {
		$this->running = false;
		$this->power = 0;
	}
	
	public function increasePower() {
		if ($this->running and ($this->power < 10)):
			$this->power++;
		endif;
	}
	
	public function decreasePower() {
		if ($this->running and ($this->power > 0)):
			$this->power--;
		endif;
	}
	
	public function __toString() {
		return get_class($this) . '(' . (string)$this->size . ')';
	}
}
?>