<?php
class SalesEmailHandler extends AbstractEmailHandler {
	
	protected function matchingWords() {
		return array('buy', 'purchase');
	}
	
	protected function handleHere($email) {
		return 'Email handled by sales department';
	}
	
}
?>