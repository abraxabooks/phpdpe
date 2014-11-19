<?php
include_once('imports.php');

session_start();

$model = new CarModel();
$view = new CarView($model);
$controller = new CarController($model, $view);

if (isset($_POST['submit'])):
	// Submit button clicked on form
    $controller->submitClicked(filter_input(INPUT_POST, 'selected_car_type'),
                               filter_input(INPUT_POST, 'selected_engine_size'),
                               filter_input(INPUT_POST, 'selected_colour'));
else:
	// Initial page before first submission
	$view->output();
endif;
?>
