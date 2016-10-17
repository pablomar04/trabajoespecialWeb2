<?php
	include_once 'controllers/controller.php';
	include_once 'views/piezas_view.php';
	include_once 'models/nav_model.php';

	class PiezasController extends Controller{

		function __construct(){
			$this->view = new PiezasView();
			$this->model = new NavModel();
		}

		function mostrar(){
			$this->view->mostrarPiezas($this->model->getPiezas());
		}

		function mostrarPieza(){
			$this->view->mostrarPieza($this->model->getPieza());
		}



	}
?>