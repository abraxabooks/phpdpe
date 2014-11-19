<?php
require_once('imports.php');

// Create the lights
$lights = array();
$lights[0] = new OilLevelLight();
$lights[1] = new BrakeFluidLight();
$lights[2] = new NullObjectLight();

// Turn oil $ brake lights on
$lights[0]->turnOn();
$lights[1]->turnOn();
?>
<html>
	<body>
		<?php foreach ($lights as $light): ?>
			<p><?php echo $light->isOn() ? 'true' : 'false'; ?></p>
		<?php endforeach; ?>
	</body>
</html>
