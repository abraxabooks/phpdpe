<?php
require_once('imports.php');

$myCar = new Sport(new StandardEngine(2000));
$myCar->setSpeed(20);
$myCar->setSpeed(40);

// Swithing on sports mode gearbox...
$myCar->setGearboxStrategy(new SportGearboxStrategy());
$myCar->setSpeed(20);
$myCar->setSpeed(40);
?>
