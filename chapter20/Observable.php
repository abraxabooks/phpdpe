<?php
abstract class Observable {

	private $observers = array();
	private $changed;
	
	public function __construct() {
		$this->changed = false;
	}
	
	public function addObserver(Observer $observer) {
		array_push($this->observers, $observer);
	}
	
	public function deleteObserver(Observer $observer) {
		unset($this->observers[$observer]);
	}
	
	public function deleteObservers() {
		$this->observers = array();
	}
	
	public function notifyObservers() {
		if ($this->hasChanged()):
			foreach ($this->observers as $observer):
				$observer->update($this); 	
			endforeach;
		endif;
		$this->clearChanged();
	}
	
	public function hasChanged() {
		return $this->changed;
	}
	
	protected function setChanged() {
		$this->changed = true;
	}
	
	protected function clearChanged() {
		$this->changed = false;
	}
		
}
?>