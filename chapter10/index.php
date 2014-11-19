<?php
require_once('imports.php');

// Create a blue saloon car...
$myCar = new Saloon(new StandardEngine(1300));
$myCar->paint(Vehicle::BLUE);

// Add air-conditioning to the vehicle...
$myCar = new AirConditionedVehicle($myCar);

// Now add alloy wheels...
$myCar = new AlloyWheeledVehicle($myCar);

// Now add leather seats...
$myCar = new LeatherSeatedVehicle($myCar);

// Now add metallic paint...
$myCar = new MetallicPaintedVehicle($myCar);

// Now add satellite-navigation...
$myCar = new SatNavVehicle($myCar);

?>
<html>
	<body>
		<p><?php echo $myCar; ?></p>
	</body>
</html>