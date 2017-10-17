<?php
require_once 'model/doc.php';
class DocController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Doc();
	}

	public function Index(){
		$docs=true;
		$page="view/docs.php";
		require_once 'view/index.php';
	}

}
?>