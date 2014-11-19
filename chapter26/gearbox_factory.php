<?php
class GearboxFactory {

	const AUTOMATIC	= 1;
	const MANUAL	= 2;
	
	public static function create($type) {
		if ($type == GearboxFactory::AUTOMATIC):
			return new AutomaticGearbox();
		else:
			return new ManualGearbox();
		endif;
	}
}
?>