<?php
require_once('imports.php');

$nut = new Part('Nut', 5);
$bolt = new Part('Bolt', 9);
$panel = new Part('Panel', 35);

$gizmo = new Assembly('Gizmo');
$gizmo->addItem($panel);
$gizmo->addItem($nut);
$gizmo->addItem($bolt);

$widget = new Assembly('Widget');
$widget->addItem($gizmo);
$widget->addItem($nut);

?>
<html>
	<body>
		<p><?php echo $nut; ?></p>
		<p><?php echo $bolt; ?></p>
		<p><?php echo $panel; ?></p>
		<p><?php echo $gizmo; ?></p>
		<p><?php echo $widget; ?></p>
	</body>
</html>