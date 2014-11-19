<?php
require_once('imports.php');

//$vehicle_manager = new VehicleManager();
$vehicle_manager = new VehicleManagerLazy();

$saloon1 = $vehicle_manager->createSaloon();
$saloon2 = $vehicle_manager->createSaloon();
$pickup1 = $vehicle_manager->createPickup();

?>
<html>
	<body>
		<p><?php echo $saloon1; ?></p>
		<p><?php echo $saloon2; ?></p>
		<p><?php echo $pickup1; ?></p>
	</body>
</html>