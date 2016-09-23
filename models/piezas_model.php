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
			$sentencia = $this->db->prepare('SELECT * from piezas');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);			
		}

	}

?>