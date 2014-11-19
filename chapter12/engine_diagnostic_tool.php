<?php
class EngineDiagnosticTool implements DiagnosticTool {
	public function runDiagnosis($engine) {
		return 'Diagnosis complete for ' . $engine;
	}
}
?>
