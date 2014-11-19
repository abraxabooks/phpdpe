<?php
require_once('imports.php');

// Create an engine...
$engine = new StandardEngine(1300);

// Run diagnostics on the engine...

?>
<html>
	<body>
		<p><?php echo $engine->acceptEngineVisitor(new EngineDiagnostics()); ?></p>
		<p><?php echo $engine->acceptEngineVisitor(new EngineInventory()); ?></p>
	</body>
</html>
