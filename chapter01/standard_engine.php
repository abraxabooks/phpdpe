<?php
class StandardEngine extends AbstractEngine {

	public function __construct($size) {
		parent::__construct($size, false); // not turbocharched
	}

}
?>