<?php
require_once('imports.php');

$engine = new StandardEngine(1300);

$standard_controls = new StandardControls($engine);
$standard_controls->ignitionOn();
$standard_controls->accelerate();
$standard_controls->brake();
$standard_controls->ignitionOff();

// Now use sport controls
$sport_controls = new SportControls($engine);
$sport_controls->ignitionOn();
$sport_controls->accelerate();
$sport_controls->accelerateHard();
$sport_controls->brake();
$sport_controls->ignitionOff();

?>
