<?php
class EngineProxy implements Engine {

	private $engine;
	
	public function __construct($size, $turbo) {
		if ($turbo == true):
			$this->engine = new TurboEngine($size);
		else:
			$this->engine = new StandardEngine($size);
		endif;
	}
	
	public function getSize() {
		return $this->engine->getSize();
	}
	
	public function isTurbo() {
		return $this->engine->isTurbo();
	}
	
	// This function is potentially time consuming...
	public function diagnose(DiagnosticTool $diagnostic_tool) {
		return $diagnostic_tool->runDiagnosis($this->engine);
	}
	
}
?>