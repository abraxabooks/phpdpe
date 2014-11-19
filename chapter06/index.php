<?php
require_once('imports.php');

$next_serial1 = SerialNumberGenerator::getInstance()->getNextSerial();
$next_serial2 = SerialNumberGenerator::getInstance()->getNextSerial();
$next_serial3 = SerialNumberGenerator::getInstance()->getNextSerial();

?>
<html>
	<body>
		<p><?php echo $next_serial1; ?></p>
		<p><?php echo $next_serial2; ?></p>
		<p><?php echo $next_serial3; ?></p>
	</body>
</html>