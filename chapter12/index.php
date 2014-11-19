<?php
require_once('imports.php');

// Create the flyweight factory
$factory = new EngineFlyweightFactory();

// Create the diagnostic tool
$tool = new EngineDiagnosticTool();

// Get the flyweights and run diagnostics on them
$standard1 = $factory->getStandardEngine(1300);
$standard1->diagnose($tool);

$standard2 = $factory->getStandardEngine(1300);
$standard2->diagnose($tool);

$standard3 = $factory->getStandardEngine(1300);
$standard3->diagnose($tool);

$standard4 = $factory->getStandardEngine(1600);
$standard4->diagnose($tool);

$standard5 = $factory->getStandardEngine(1600);
$standard5->diagnose($tool);
?>
<html>
	<body>
		<p><?php echo spl_object_hash($standard1); ?></p>
		<p><?php echo spl_object_hash($standard2); ?></p>
		<p><?php echo spl_object_hash($standard3); ?></p>
		<p><?php echo spl_object_hash($standard4); ?></p>
		<p><?php echo spl_object_hash($standard5); ?></p>
	</body>
</html>