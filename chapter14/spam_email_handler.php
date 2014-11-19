<?php
class SpamEmailHandler extends AbstractEmailHandler {
	
	protected function matchingWords() {
		return array('viagra', 'pills', 'medicines');
	}
	
	protected function handleHere($email) {
		return 'This is a spam email';
	}
	
}
?>