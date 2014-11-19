<?php
require_once('imports.php');
session_start();
$view = unserialize($_SESSION['view']);
?>
<html>
    <body>
        <h1>Car Management</h1>
        
        <h2>Add to stock</h2>
        <form name="add_to_stock" method="post" action="index.php">
            <p>
                Type:
                <select name="selected_car_type">
                    <?php foreach ($view->getModel()->getCarTypesAvailable() as $car_type): ?>
                        <option value="<?php echo $car_type; ?>"><?php echo $car_type; ?></option>
                    <?php endforeach; ?>
                </select>
                Engine:
                <select name="selected_engine_size">
                    <?php foreach ($view->getModel()->getEngineSizesAvailable() as $engine_size): ?>
                        <option value="<?php echo $engine_size; ?>"><?php echo $engine_size; ?></option>
                    <?php endforeach; ?>
                </select>
                Colour:
                <select name="selected_colour">
                    <?php foreach ($view->getModel()->getColoursAvailable() as $colour): ?>
                        <option value="<?php echo $colour; ?>"><?php echo $colour; ?></colour>
                    <?php endforeach; ?>
                </select>
                <input type="submit" name="submit" value="Submit" />
            </p>
        </form>
		
        <h2>Cars in stock</h2>
        <ul>
            <?php foreach ($view->getModel()->getCarsInStock() as $car): ?>
                <li><?php echo $car; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
