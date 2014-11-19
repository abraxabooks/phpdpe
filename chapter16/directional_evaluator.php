<?php
class DirectionalEvaluator {

	private $cities = array();
	
	public function __construct() {
		$this->cities['aberdeen']		= new City('Aberdeen', 57.15, -2.15);
		$this->cities['belfast']		= new City('belfast', 54.62, -5.93);
		$this->cities['birmingham']		= new City('birmingham', 52.42, -1.92);
		$this->cities['dublin']			= new City('dublin', 53.33, -6.25);
		$this->cities['edinburgh']		= new City('edinburgh', 55.92, -3.02);
		$this->cities['glasgow']		= new City('glasgow', 55.83, -4.25);
		$this->cities['london']			= new City('london', 51.53, -0.08);
		$this->cities['liverpool']		= new City('liverpool', 53.42, -3.0);
		$this->cities['manchester']		= new City('manchester', 53.5, -2.25);
		$this->cities['southampton']	= new City('southampton', 50.9, -1.38);
	}
	
	public function evaluate($route) {
		// Define the syntax tree
		$expressionStack = array();
		
		// Parse each yoken in $route string
		$route_array = explode(' ', $route);
		foreach ($route_array as $token):
			// Is token a recognised city?
			if (isset($this->cities[$token])):
				array_push($expressionStack, new CityExpression($this->cities[$token]));

			// Is token to find most northerly?
			elseif ($token == 'northerly'):
				array_push($expressionStack, new MostNortherlyExpression($this->loadExpressions($expressionStack)));
				
			// Is token to find most southerly?
			elseif ($token == 'southerly'):
				array_push($expressionStack, new MostSoutherlyExpression($this->loadExpressions($expressionStack)));

			// Is token to find most westerly?
			elseif ($token == 'westerly'):
				array_push($expressionStack, new MostWesterlyExpression($this->loadExpressions($expressionStack)));

			// Is token to find most easterly?
			elseif ($token == 'easterly'):
				array_push($expressionStack, new MostEasterlyExpression($this->loadExpressions($expressionStack)));
			endif;
		endforeach;
		
		// Resulting value
		return array_pop($expressionStack)->interpret();
	}
	
	// Note: parameter must be passed by reference
	private function loadExpressions(array &$expressionStack) {
		$expressions = array();
		while (! empty($expressionStack)):
			array_push($expressions, array_pop($expressionStack));
		endwhile;
		
		return $expressions;
	}
	
}
?>