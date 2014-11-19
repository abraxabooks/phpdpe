<?php
class EngineDiagnostics implements EngineVisitor {

	public function visitCamshaft(Camshaft $camshaft) {
		return 'Diagnosing the camshaft';
	}
	
	public function visitEngine(Engine $engine) {
		return 'Diagnosing the unit engine';
	}
	
	public function visitPiston(Piston $piston) {
		return 'Diagnosing the piston';
	}
	
	public function visitSparkPlug(SparkPlug $sparkPlug) {
		return 'Diagnosing a single spark plug';
	}
}
?>