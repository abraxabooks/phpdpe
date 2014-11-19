<?php
class SuperGreenEngineAdapter extends AbstractEngine {

	public function __construct(SuperGreenEngine $green_engine) {
		parent::__construct($green_engine->getEngineSize(), false);
	}
}
?>