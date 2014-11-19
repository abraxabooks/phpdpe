<?php
require_once('imports.php');

$email = 'I need my car repaired.';

?>
<html>
	<body>
		<p><?php echo AbstractEmailHandler::handle($email); ?></p>
	</body>
</html>