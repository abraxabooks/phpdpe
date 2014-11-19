<?php
class SerialNumberGenerator {

	// Static variables and functions
	private static $instance;
	
	public static function getInstance() {
		if (empty(SerialNumberGenerator::$instance)):
			SerialNumberGenerator::$instance = new SerialNumberGenerator();
		endif;
		return SerialNumberGenerator::$instance;
	}
	
	
	// Instance variables and functions
	private $count;
	
	private function __construct() {
		$this->count = 0;
	}
	
	public function getNextSerial() {
		return ++$this->count;
	}
}
?>
