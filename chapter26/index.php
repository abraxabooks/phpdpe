<?php
require_once('imports.php');

$auto = GearboxFactory::create(GearboxFactory::AUTOMATIC);
$manual = GearboxFactory::create(GearboxFactory::MANUAL);
?>
<html>
	<body>
		<p><?php echo $auto->getCurrentGear(); ?></p>
		<p><?php echo $manual->getCurrentGear(); ?></p>
	</body>
</html>
