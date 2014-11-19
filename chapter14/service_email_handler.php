<?php
class ServiceEmailHandler extends AbstractEmailHandler {
	
	protected function matchingWords() {
		return array('service', 'repair');
	}
	
	protected function handleHere($email) {
		return 'Email handled by service department';
	}
	
}
?>