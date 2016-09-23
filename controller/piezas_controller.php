<?php 
	include_once 'views/piezas_view.php';
	include_once 'models/piezas_model.php';
	
	class PiezasController {
	
		private $view;
		private $model;

		function __construct(){
			$this->view = new PiezasView();
			$this->model = new PiezasModel();
		}

		function inicio(){
			$this->view->mostrar($this->model->getPiezas());
		}

	}
?>