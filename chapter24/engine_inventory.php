<?php
class EngineInventory implements EngineVisitor {

	private $camshaftCount;
	private $pistonCount;
	private $sparkPlugCount;
	
	public function __construct() {
		$this->camshaftCount = 0;
		$this->pistonCount = 0;
		$this->sparkPlugCount = 0;
	}

	public function visitCamshaft(Camshaft $camshaft) {
		$this->camshaftCount++;
	}
	
	public function visitEngine(Engine $engine) {
		return 'The engine has: ' . 
					$this->camshaftCount . ' camshaft(s), ' .
					$this->pistonCount . ' piston(s), and ' .
					$this->sparkPlugCount . ' spark plug(s)';
	}
	
	public function visitPiston(Piston $piston) {
		$this->pistonCount++;
	}
	
	public function visitSparkPlug(SparkPlug $sparkPlug) {
		$this->sparkPlugCount++;
	}
}
?>