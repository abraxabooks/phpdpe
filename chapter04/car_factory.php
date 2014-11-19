<?php
class CarFactory extends VehicleFactory {

	protected function selectVehicle($driving_style) {
		switch ($driving_style):
			case VehicleFactory::ECONOMICAL:
				return new Saloon(new StandardEngine(1300));
			
			case VehicleFactory::MIDRANGE:
				return new Coupe(new StandardEngine(1600));
			
			default:
				// must want powerful
				return new Sport(new TurboEngine(2000));
		endswitch;
	}
	
}
?>
