<?php
require_once('imports.php');

// Create the evaluator
$engineManagementSystem = new EngineManagementSystem();
$ignition = new Ignition($engineManagementSystem);
$gearbox = new Gearbox($engineManagementSystem);
$accelerator = new Accelerator($engineManagementSystem);
$brake = new Brake($engineManagementSystem);
?>
