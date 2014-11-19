<?php
require_once('imports.php');

$clockSetup = new ClockSetup();

// Setup starts in 'year' mode
$clockSetup->rotateKnobRight();
$clockSetup->pushKnob(); // 1 year on

// Setup should now be in 'month' state
$clockSetup->rotateKnobRight();
$clockSetup->rotateKnobRight();
$clockSetup->pushKnob(); // 2 months on

// Setup should now be in 'day' state
$clockSetup->rotateKnobRight();
$clockSetup->rotateKnobRight();
$clockSetup->rotateKnobRight();
$clockSetup->pushKnob(); // 3 days on

// Setup should now be in 'hour' state
$clockSetup->rotateKnobLeft();
$clockSetup->rotateKnobleft();
$clockSetup->pushKnob(); // 2 hours back

// Setup should now be in 'minute' state
$clockSetup->rotateKnobRight();
$clockSetup->pushKnob(); // 1 minute on

// Setup should now be in 'finished' state
$clockSetup->pushKnob();
?>
<html>
	<body>
		<p><?php echo $clockSetup->getSelectedDate(); ?>
	</body>
</html>
