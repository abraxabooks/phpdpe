<?php
class VolumeDownCommand implements Command {

	private $radio;
	
	public function __construct(Radio $radio) {
		$this->radio = $radio;
	}
	
	public function execute() {
		$this->radio->volumeDown();
	}
	
}
?>