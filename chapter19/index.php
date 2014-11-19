<?php
require_once('imports.php');

$speedo = new Speedometer();

$speedo->setCurrentSpeed(50);
$speedo->setCurrentSpeed(100);

// Save the state of $speedo
$memento = new SpeedometerMemento($speedo);

// Change the state of $speedo
$speedo->setCurrentSpeed(80);

// Restore the state of $speedo
$speedo = $memento->restoreState();
?>
<html>
	<body>
		<p><?php echo 'Current speed: ' . $speedo->getCurrentSpeed(); ?></p>
		<p><?php echo 'Previous speed: ' . $speedo->getPreviousSpeed(); ?></p>
	</body>
</html>
