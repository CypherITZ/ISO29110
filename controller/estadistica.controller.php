<?php
require_once 'model/estadistica.php';
class EstadisticaController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Estadistica();
	}

	public function Index(){
		$estadisticas=true;
		$page="view/estadisticas.php";
		require_once 'view/index.php';
	}

}
?>