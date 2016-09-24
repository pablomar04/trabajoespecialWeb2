<?php
	require 'libs/Smarty.class.php';

	class PiezasView{

		private $smarty;

		function __construct(){
			$this->smarty = new Smarty();
		}

		function mostrar($piezas, $camp){
    		$this->smarty->assign('piezas',$piezas);
    		$this->smarty->assign('camp',$camp);
    		$this->smarty->display('index2.tpl');
  		}
  		
	}
?>