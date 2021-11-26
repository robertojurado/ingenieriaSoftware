<?php 
/*
$mysqli = new mysqli('localhost', 'root', "", 'autoscolombia');

//Verificar la conexión
if ($mysqli->connect_errno) {
	echo "Conexión fallida ".$mysqli->connect_errno;
	exit;
}

*/

class conexion {

	public $servidor;
	public $usuario;
	public $clave;
	public $baseDatos;
	public $miConexion; 

	public function conexion() {

		$this->servidor ="localhost";
		$this->usuario ="root";
		$this->clave = "";
		$this->baseDatos = "autoscolombia";
		$this->miConexion = new mysqli($this->servidor,$this->usuario,$this->clave = "",$this->baseDatos);

		if($this->miConexion->connect_errno){
			echo "Ha ocurrido un error al intentar conectarse con la base de datos";
		}

	}

}

	
?>