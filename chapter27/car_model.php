<?php
class CarModel {

	const DB_FILE		 = 'cars-in-stock.dat';	  

    const SALOON         = 'Saloon';
    const COUPE          = 'Coupe';
    const SPORT          = 'Sport';

    const ENGINE_1300    = 1300;
    const ENGINE_1600    = 1600;
    const ENGINE_2000    = 2000;

    private $carTypesAvailable = array(CarModel::SALOON, CarModel::COUPE, CarModel::SPORT);
    private $engineSizesAvailable = array(CarModel::ENGINE_1300, CarModel::ENGINE_1600, CarModel::ENGINE_2000);
    private $coloursAvailable = array(Vehicle::BLUE, Vehicle::BLACK, Vehicle::RED, Vehicle::WHITE);

    private $carsInStock = array();
	
	public function __construct() {
		if (file_exists(CarModel::DB_FILE)):
			$this->carsInStock = unserialize(file_get_contents(CarModel::DB_FILE));
		endif;
	}
    
    public function getCarTypesAvailable() {
        return $this->carTypesAvailable;
    }
    
    public function getEngineSizesAvailable() {
        return $this->engineSizesAvailable;
    }
    
    public function getColoursAvailable() {
        return $this->coloursAvailable;
    }
    
    public function getCarsInStock() {
        return $this->carsInStock;
    }
    
    public function addCarToStock($car_type, $engine_size, $colour) {
        $engine = new StandardEngine($engine_size);
        $car = new $car_type($engine, $colour);
        array_push($this->carsInStock, $car);
		file_put_contents(CarModel::DB_FILE, serialize($this->carsInStock));
    }
}
?>