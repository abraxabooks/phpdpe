<?php
require_once('imports.php');

$what_to_make = 'car'; // or 'van'

if ($what_to_make == 'car'):
	$factory = new CarFactory();
else:
	$factory = new VanFactory();
endif;

// Create the vehicle's component parts...
// These will either be all car parts or all van parts
$vehicle_body = $factory->createBody();
$vehicle_chassis = $factory->createChassis();
$vehicle_windows = $factory->createWindows();

?>
<html>
	<body>
		<p><?php echo $vehicle_body->getBodyParts(); ?></p>
		<p><?php echo $vehicle_chassis->getChassisParts(); ?></p>
		<p><?php echo $vehicle_windows->getWindowParts(); ?></p>
	</body>
</html>