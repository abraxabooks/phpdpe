<?php
abstract class AbstractEngine implements Engine {

	private $size;
	private $turbo;
	
	public function __construct($size, $turbo) {
		$this->size = $size;
		$this->turbo = $turbo;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function isTurbo() {
		return $this->turbo;
	}

	public function diagnose(DiagnosticTool $diagnostic_tool) {
		$diagnostic_tool->runDiagnosis($this);
	}
	
	public function __toString() {
		return get_class($this) . '(' . (string)$this->size . ')';
	}
}
?>