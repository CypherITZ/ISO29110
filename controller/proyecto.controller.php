<?php
require_once 'model/proyecto.php';
class ProyectoController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Proyecto();
	}

	public function Index(){
		$proyectos=true;
		$vproyectos=true;
		$page="view/proyectos/proyectos.php";
		require_once 'view/index.php';
	}
	public function Crud(){
		$proyectos=true;
		$rproyecto=true;
		$page="view/proyectos/crud.php";
		require_once 'view/index.php';
	}

}
?>