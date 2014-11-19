<?php
abstract class AbstractVehicleFactory {

	public abstract function createBody();
	public abstract function createChassis();
	public abstract function createWindows();
	
}
?>
