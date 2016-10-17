<?php 
	include_once 'views/nav_view.php';
	include_once 'models/nav_model.php';
	include_once 'controllers/controller.php';

	class NavController extends Controller{
	

		function __construct(){
			$this->view = new NavView();
			$this->model = new NavModel();
		}

		function mostrar($pagina){
			$this->view->mostrar($pagina);
		}

		function verpieza(){
			$this->view->mostrarPieza($this->model->getPieza());
		}

	}
?>