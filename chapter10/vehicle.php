<?php
interface Vehicle {

	const UNPAINTED		= "Unpainted";
	const BLUE			= "Blue";
	const BLACK			= "Black";
	const GREEN			= "Green";
	const RED			= "Red";
	const SILVER		= "Silver";
	const WHITE			= "White";
	const YELLOW		= "Yellow";

	public function getEngine();
	public function getColour();
	public function paint($colour);
	public function getPrice();
}
?>
