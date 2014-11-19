<?php
class GeneralEnquiriesEmailHandler extends AbstractEmailHandler {
	
	protected function matchingWords() {
		return array(); // match anything
	}
	
	protected function handleHere($email) {
		return 'Email handled by general enquiries';
	}
	
}
?>