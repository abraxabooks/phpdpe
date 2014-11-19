<?php
require_once('imports.php');

// Create the evaluator
$evaluator = new DirectionalEvaluator();
?>
<html>
	<body>
		<!-- This should output "London" -->
		<p><?php //echo $evaluator->evaluate('london edinburgh manchester southerly'); ?></p>

		<!-- This should output "Aberdeen" -->
		<p><?php echo $evaluator->evaluate('london edinburgh manchester southerly aberdeen westerly'); ?></p>
	</body>
</html>