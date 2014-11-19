<?php
class CarController
{
    private $model;
	private $view;
 
    public function __construct(CarModel $model, CarView $view) {
        $this->model = $model;
        $this->view = $view;
    }
     
    public function submitClicked($car_type, $engine_size, $colour) {
		$this->model->addCarToStock($car_type, $engine_size, $colour);
		$this->view->output();
    }
}
?>
