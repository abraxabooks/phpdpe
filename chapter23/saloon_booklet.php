<?php
class ServiceHistoryBooklet extends AbstractBookletPrinter {

	protected function getPageCount() {
		return 12;
	}
	
	protected function printFrontCover() {
		return 'Printing front cover for service history booklet';
	}
	
	protected function printTableOfContents() {
		return 'Printing table of contents for service history booklet';
	}
	
	protected function printPage($pageNumber) {
		return 'Printing page ' . $pageNumber . ' for service history booklet';
	}
	
	protected function printIndex() {
		return 'Printing index for service history booklet';
	}
	
	protected function printBackCover() {
		return 'Printing back cover for service history booklet';
	}
	
}
?>