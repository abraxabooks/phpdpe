<?php
class CityExpression implements Expression {

	private $city;
	
	public function __construct(City $city) {
		$this->city = $city;
	}

	public function interpret() {
		return $this->city;
	}

}
?>