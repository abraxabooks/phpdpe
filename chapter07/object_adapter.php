<?php
class ObjectAdapter extends ClassAdaptingTo {

	private $fromObject;

	public function __construct(FromClass $fromObject) {
		$this->fromObject = $fromObject;
	}
	
	// Overridden function
	public function functionInToClass() {
		$this->fromObject->functionInFromClass();
	}
}
?>