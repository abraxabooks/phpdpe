<?php
class SpeechRecogniser {

	private $upCommand, $downCommand;
	
	public function setCommands(Command $upCommand, Command $downCommand) {
		$this->upCommand = $upCommand;
		$this->downCommand = $downCommand;
	}
	
	public function hearUpSpoken() {
		$this->upCommand->execute();
	}
	
	public function hearDownSpoken() {
		$this->downCommand->execute();
	}
	
}
?>