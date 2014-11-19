<?php
class CarView {
    
    private $model;
 
    public function __construct(CarModel $model) {
        $this->model = $model;
		$_SESSION['view'] = serialize($this);
    }
	
	public function getModel() {
		return $this->model;
	}
	
	
	public function output() {
		require_once('car_view_template.php');
		$_SESSION['view'] = serialize($this);
		header('Location: car_view_template.php');
		die();
	}
}
?>
