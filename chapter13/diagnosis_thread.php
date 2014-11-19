<?php
// NOTE - This requires PECL
class DiagnosisThread extends Thread {

	private $engine;
	private $diagnostic_tool;

	public function __construct($engine, DiagnosticTool $diagnostic_tool) {
		$this->engine = $engine;
		$this->diagnostic_tool = $diagnostic_tool;
	}

	public function run() {
		// We assume this is a long running process...
		$this->engine->diagnose($this->diagnostic_tool);
	}
}
?>