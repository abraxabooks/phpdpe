<?php
require_once('imports.php');

$saloonBooklet = new SaloonBooklet();
$serviceHistoryBooklet = new ServiceHistoryBooklet();
?>
<html>
	<body>
		<p>Saloon <?php echo $saloonBooklet->printBooklet(); ?></p>
		<p>Service History <?php echo $serviceHistoryBooklet->printBooklet(); ?></p>
	</body>
</html>
