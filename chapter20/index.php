<?php
require_once('imports.php');

// Create a monitor...
$monitor = new SpeedMonitor();

// Create a speedomter and register the monitor to it...
$speedo = new Speedometer();
$speedo->addObserver($monitor);

// Drive at different speeds...
$speedo->setCurrentSpeed(71);
?>
<html>
	<body>
		<!-- Drive at different speeds -->
		<p><?php echo 'Too fast? = ' . ($monitor->isSpeeding() ? 'true' : 'false'); ?></p>
	</body>
</html>
