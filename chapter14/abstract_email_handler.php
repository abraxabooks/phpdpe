<?php
abstract class AbstractEmailHandler implements EmailHandler {
	
	public static function handle($email) {
		// Create the handler objects...
		$spam = new SpamEmailHandler();
		$sales = new SalesEmailHandler();
		$service = new ServiceEmailHandler();
		$manager = new ManagerEmailHandler();
		$general = new GeneralEnquiriesEmailHandler();
		
		// Chain them together...
		$spam->setNextHandler($sales);
		$sales->setNextHandler($service);
		$service->setNextHandler($manager);
		$manager->setNextHandler($general);
		
		// Start the ball rolling...
		return $spam->processHandler($email);
	}


	private $nextHandler;

	public function setNextHandler(EmailHandler $nextHandler) {
		$this->nextHandler = $nextHandler;
	}
	
	public function processHandler($email) {
		$wordFound = false;
		
		// If no words to match against then this object can handle
		if (count($this->matchingWords()) == 0):
			$wordFound = true;
		else:
			// Look for any of the matching words
			foreach ($this->matchingWords() as $word):
				if (strpos($email, $word) !== false):
					$wordFound = true;
					break;
				endif;
			endforeach;
		endif;
		
		// Can we handle email in this object?
		if ($wordFound == true):
			return $this->handleHere($email);
		else:
			// Unable to handle here so forward to next in chain
			return $this->nextHandler->processHandler($email);
		endif;
	}
	
	protected abstract function matchingWords();
	protected abstract function handleHere($email);
	
}
?>