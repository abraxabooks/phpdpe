<?php
require_once('imports.php');

// Create a radio and its up/down command objects
$radio = new Radio();
$radio->on();
$volumeUpCommand = new VolumeUpCommand($radio);
$volumeDownCommand = new VolumeDownCommand($radio);

// Create an electric window and its up/down command objects
$window = new ElectricWindow();
$windowUpCommand = new WindowUpCommand($window);
$windowDownCommand = new WindowDownCommand($window);

// Create a speech recogniser object
$speechRecogniser = new SpeechRecogniser();

// Control the radio
$speechRecogniser->setCommands($volumeUpCommand, $volumeDownCommand);
$speechRecogniser->hearUpSpoken();
$speechRecogniser->hearDownSpoken();

// Control the electric window
$speechRecogniser->setCommands($windowUpCommand, $windowDownCommand);
$speechRecogniser->hearUpSpoken();
$speechRecogniser->hearDownSpoken();
?>
