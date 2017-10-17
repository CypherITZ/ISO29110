<?php
require_once 'model/sproyecto.php';
class sProyectoController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new sProyecto();
	}

	public function Index(){
		$sproyecto=true;
		$page="view/sproyectos.php";
		require_once 'view/index.php';
	}

}
?>