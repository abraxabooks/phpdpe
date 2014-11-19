<?php
class MostEasterlyExpression implements Expression {

	private $expressions = array();
	
	public function __construct(array $expressions) {
		$this->expressions = $expressions;
	}

	public function interpret() {
		$resultingCity = new City("Nowhere", -999.9, -999.9);
		foreach ($this->expressions as $currentExpression):
			$currentCity = $currentExpression->interpret();
			if ($currentCity->getLongitude() > $resultingCity->getLongitude()):
				$resultingCity = $currentCity;
			endif;
		endforeach;
		
		return $resultingCity;
	}
}
?>