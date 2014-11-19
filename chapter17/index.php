<?php
require_once('imports.php');

// Create the evaluator
$carRange = new CarRange();
$vanRange = new VanRange();
?>
<html>
	<body>
		<h1>Cars</h1>
		<?php foreach ($carRange as $car): ?>
			<p><?php echo $car; ?></p>
		<?php endforeach; ?>

		<h1>Vans</h1>
		<?php foreach ($vanRange as $van): ?>
			<p><?php echo $van; ?></p>
		<?php endforeach; ?>
	</body>
</html>