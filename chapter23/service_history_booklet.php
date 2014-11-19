<?php
class SaloonBooklet extends AbstractBookletPrinter {

	protected function getPageCount() {
		return 12;
	}
	
	protected function printFrontCover() {
		return 'Printing front cover for Saloon car booklet';
	}
	
	protected function printTableOfContents() {
		return 'Printing table of contents for Saloon car booklet';
	}
	
	protected function printPage($pageNumber) {
		return 'Printing page ' . $pageNumber . ' for Saloon car booklet';
	}
	
	protected function printIndex() {
		return 'Printing index for Saloon car booklet';
	}
	
	protected function printBackCover() {
		return 'Printing back cover for Saloon car booklet';
	}
	
}
?>