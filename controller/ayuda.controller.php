<?php
require_once 'model/ayuda.php';
class AyudaController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Ayuda();
	}

	public function Index(){
		$ayudas=true;
		$page="view/ayudas.php";
		require_once 'view/index.php';
	}

}
?>