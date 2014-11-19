<?php
require_once('imports.php');

$standard = new StandardEngine(1300);

$saloon = new Saloon($standard);
$ferarri = new Sport(new TurboEngine(3000), Vehicle::RED);
?>
<html>
	<body>
		<p><?php echo $standard; ?></p>
		<p><?php echo $saloon; ?></p>
		<p><?php echo $ferarri; ?></p>
		<p><?php echo $ferarri->getColour(); ?></p>
		
	</body>
</html>