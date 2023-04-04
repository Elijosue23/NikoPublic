<?php

class conexion{
	public $conexion;
	function conectar(){
		try{
			$this->conexion = new PDO('mysql:host=localhost; dbname=istnikolatesla', 'root', '');
			
		   } catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}
	}
	function cerrar(){
		$this->conexion->close();	
	}
}




?>