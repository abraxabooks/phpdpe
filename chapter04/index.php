<?php
require_once('imports.php');

// I want an economical car, coloured blue...
$car_factory = new CarFactory();
$car = $car_factory->build(VehicleFactory::ECONOMICAL, Vehicle::BLUE);

// I am a "white van man"...
$van_factory = new VANFactory();
$van = $van_factory->build(VehicleFactory::POWERFUL, Vehicle::WHITE);

// Create a red sports car
$sporty = VehicleFactory::make(VehicleFactory::CAR, VehicleFactory::POWERFUL, Vehicle::RED);

?>
<html>
	<body>
		<p><?php echo $car; ?></p>
		<p><?php echo $van; ?></p>
		<p><?php echo $sporty; ?></p>
	</body>
</html>