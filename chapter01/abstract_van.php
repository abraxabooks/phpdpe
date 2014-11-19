<?php
abstract class AbstractVan extends AbstractVehicle {
	
	public function __construct(Engine $engine, $colour = Vehicle::UNPAINTED) {
		parent::__construct($engine, $colour);
	}
}
?>
