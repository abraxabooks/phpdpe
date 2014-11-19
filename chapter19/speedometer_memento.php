<?php
class SpeedometerMemento {

	const SPEEDO_FILE = 'speedofile.data';

	public function __construct(Speedometer $speedometer) {
		// Serialise...
		file_put_contents(SpeedometerMemento::SPEEDO_FILE, serialize($speedometer));
	}
	
	public function restoreState() {
		// Unserialise...
		return unserialize(file_get_contents(SpeedometerMemento::SPEEDO_FILE));
	}
	
}
?>