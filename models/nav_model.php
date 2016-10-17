<?php
	include_once 'models/model.php';
	class NavModel extends Model{



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