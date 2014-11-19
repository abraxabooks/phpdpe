<?php
class StandardGearboxStrategy implements GearboxStrategy {

	public function ensureCorrectGear(Engine $engine, $speed) {
		$engineSize = $engine->getSize();
		$turbo = $engine->isTurbo();
		
		// Some complicated code to determine correct gear
		// setting based on $engineSize, $turbo, $speed etc.
		// ... omitted ...
		return "Working out correct gear at {$speed}mph for a STANDARD gearbox";
	}
	
}
?>