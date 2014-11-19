<?php
require_once('imports.php');

// Create a diagnostic tool
$tool = new EngineDiagnosticTool();

// Create an Engine through the proxy
$engine_proxy = new EngineProxy(1300, false);

?>
<html>
	<body>
		<p><?php echo $engine_proxy->diagnose($tool); ?></p>
	</body>
</html>