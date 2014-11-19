<?php
class Pickup extends AbstractVan {
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
	}
}
?>