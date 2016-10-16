<?php
	class PiezasModel {

		private $db;

		function __construct(){
			try{
				
    			$this->db = new PDO('mysql:host=localhost;dbname=stock;charset=utf8', 'root', '');
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		}catch(PDOException $e){
				echo "ERROR: " . $e->getMessage();
			}

		}

		function getPiezas(){
			$sentencia = $this->db->prepare('SELECT * from piezas INNER JOIN campanias on piezas.fk_id_campania=campanias.id_campania');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

		function getPieza(){
			$pieza=$_REQUEST['id_pieza'];
			$sentencia = $this->db->prepare('SELECT * from piezas INNER JOIN campanias on piezas.fk_id_campania=campanias.id_campania INNER JOIN imagenes on imagenes.fk_id_pieza=piezas.id where piezas.id='.$pieza);
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

	}

?>