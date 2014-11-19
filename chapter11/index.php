<?php
require_once('imports.php');

$vehicle = new Saloon(new StandardEngine(1300), Vehicle::BLUE);
$prepared_car = VehicleFacade::prepareForSale($vehicle);
?>
<html>
	<body>
		<p><?php echo $prepared_car; ?></p>
	</body>
</html>