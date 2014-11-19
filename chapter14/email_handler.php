<?php
interface EmailHandler {

	public function setNextHandler(EmailHandler $nextHandler);
	public function processHandler($email);
	
}
?>