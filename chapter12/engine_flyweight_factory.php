<?php
class EngineFlyweightFactory {

	private $standardEnginePool = array();
	private $turboEnginePool = array();

	public function getStandardEngine($size) {
		if (isset($this->standardEnginePool[$size])):
			$engine = $this->standardEnginePool[$size];
		else:
			$engine = new StandardEngine($size);
			$this->standardEnginePool[$size] = $engine;
		endif;
		return $engine;
	}

	public function getTurboEngine($size) {
		if (isset($this->turboEnginePool[$size])):
			$engine = $this->turboEnginePool[$size];
		else:
			$engine = new TurboEngine($size);
			$this->turboEnginePool[$size] =  $engine;
		endif;
		return $engine;
	}
	
}
?>