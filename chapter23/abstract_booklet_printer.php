<?php
abstract class AbstractBookletPrinter {

	protected abstract function getPageCount();
	protected abstract function printFrontCover();
	protected abstract function printTableOfContents();
	protected abstract function printPage($pageNumber);
	protected abstract function printIndex();
	protected abstract function printBackCover();
	
	// This is the 'template method'
	public final function printBooklet() {
		$this->printFrontCover();
		$this->printTableOfContents();
		for ($i = 1; $i <= $this->getPageCount(); $i++):
			$this->printPage($i);
		endfor;
		$this->printIndex();
		$this->printBackCover();
		return 'booklet printed';
	}
	
}
?>