<?php
require_once 'model/usuario.php';
class UsuarioController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Usuario();
	}

	public function Index(){
		$usuarios=true;
		$vusuarios=true;
		$page="view//usuarios/usuarios.php";
		require_once 'view/index.php';
	}
	public function crudU(){
		$usuario=true;
		$rusuario=true;
		$page="view/usuarios/crudU.php";
		require_once 'view/index.php';
	}

}
?>