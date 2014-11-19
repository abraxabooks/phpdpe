<?php
interface Engine {
	public function getSize();
	public function isTurbo();
	
	public function start();
	public function stop();
	public function increasePower();
	public function decreasePower();
}
?>
