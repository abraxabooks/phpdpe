<?php
abstract class AbstractEngine implements Engine {

	private $size;
	private $turbo;
	
	private $camshaft;
	private $piston;
	private $sparkPlugs = array();
	
	public function __construct($size, $turbo) {
		$this->size = $size;
		$this->turbo = $turbo;
		
		// Create a camshaft, piston and 4 spark plugs
		$this->camshaft = new Camshaft();
		$this->piston = new Piston();
		$this->sparkPlugs[0] = new SparkPlug();
		$this->sparkPlugs[1] = new SparkPlug();
		$this->sparkPlugs[2] = new SparkPlug();
		$this->sparkPlugs[3] = new SparkPlug();
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function isTurbo() {
		return $this->turbo;
	}

	public function acceptEngineVisitor(EngineVisitor $visitor) {
		// Visit each component first...
		$this->camshaft->acceptEngineVisitor($visitor);
		$this->piston->acceptEngineVisitor($visitor);
		foreach ($this->sparkPlugs as $sparkPlug):
			$sparkPlug->acceptEngineVisitor($visitor);
		endforeach;
		// Now visit the receiver...
		return $visitor->visitEngine($this);
	}
	
	public function __toString() {
		return get_class($this) . '(' . (string)$this->size . ')';
	}
}
?>