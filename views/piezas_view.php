<?php
	require 'libs/Smarty.class.php';

	class PiezasView{

		private $smarty;

		function __construct(){
			$this->smarty = new Smarty();
		}

		function mostrar($piezas){
    		$this->smarty->assign('piezas',$piezas);
    		$this->smarty->display('index.tpl');
  		}
  		
	}
?>