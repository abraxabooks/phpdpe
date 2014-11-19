<?php
class VanFactory extends VehicleFactory {

	protected function selectVehicle($driving_style) {
		switch ($driving_style):
			case VehicleFactory::ECONOMICAL:
			
			case VehicleFactory::MIDRANGE:
				return new Pickup(new StandardEngine(2200));
			
			default:
				// must want powerful
				return new BoxVan(new TurboEngine(2500));
		endswitch;
	}
	
}
?>
