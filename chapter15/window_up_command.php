<?php
class WindowUpCommand implements Command {

	private $electricWindow;
	
	public function __construct(ElectricWindow $electricWindow) {
		$this->electricWindow = $electricWindow;
	}
	
	public function execute() {
		$this->electricWindow->closeWindow();
	}
	
}
?>