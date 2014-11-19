<?php
interface GearboxStrategy {

	public function ensureCorrectGear(Engine $engine, $speed);
	
}
?>