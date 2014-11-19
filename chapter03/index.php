<?php
require_once('imports.php');

$car = new Saloon(new StandardEngine(1300));
$builder = new CarBuilder($car);
$director = new CarDirector();
$vehicle = $director->build($builder);

?>
<html>
	<body>
		<p><?php echo $vehicle; ?></p>
	</body>
</html>