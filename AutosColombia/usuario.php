<?php 

	require 'conexion.php';
	
	class Usuario{

		var $CedulaID;
		var $Nombre;
		var $Apellido;
		var $TelefonoFijo;
		var $TelefonoMovil;
		var $Direccion;

		//Método constructor
		public function Usuario() {

		}

		public function Actualizar() {
				
		}

		public function Consultar($CedulaID) {

			$con = new conexion();

			$miConexion1 = $con->miConexion;
		
			$consulta = "SELECT `CedulaID`, `Nombre`, `Apellido`, `Telefono`, `Movil`, `Direccion` from `usuario` where `CedulaID` = '$CedulaID'";
			$resultado = $miConexion1->query($consulta);

			$miConexion1->close();
			return $resultado;

		}

		public function Eliminar(){

		}

		public function Registrar($CedulaID, $Nombre, $Apellido, $TelefonoFijo, $TelefonoMovil, $Direccion) {

			$con2 = new conexion();

			$miConexion2 = $con2->miConexion;

			$insercion = "INSERT INTO `usuario` (`CedulaID`, `Nombre`, `Apellido`, `Telefono`,`Movil`, `Direccion`) values ('$CedulaID', '$Nombre', '$Apellido', '$TelefonoFijo', '$TelefonoMovil', '$Direccion')";

					$resultado1 = $miConexion2->query($insercion);
					
					if ($resultado1==1) {
					    $nota = "Los datos del usuario fueron registrados exitosamente";
					    $miConexion2->close(); 
					    return $nota;
					}else{
					    $nota = "Ha ocurrido un error al registrar los datos del usuario.";
					    $miConexion2->close(); 
					    return $nota;
					}
					
		}

	}

?>