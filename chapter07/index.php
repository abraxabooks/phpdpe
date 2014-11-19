<?php
require_once('imports.php');

// "Adapt" the new engine type...
$green_engine = new SuperGreenEngine(1200);
$engine_adapter = new SuperGreenEngineAdapter($green_engine);

$engines = array(
		new StandardEngine(1300),
		new StandardEngine(1600),
		new TurboEngine(2000),
		$engine_adapter // adapted engine
	);

?>
<html>
	<body>
		<?php foreach ($engines as $engine): ?>
			<p><?php echo $engine; ?></p>
		<?php endforeach; ?>
	</body>
</html>