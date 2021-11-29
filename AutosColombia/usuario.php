<?php 

	require 'conexion.php';
	
	class Usuario{

		var $CedulaID;
		var $Nombre;
		var $Apellido;
		var $TelefonoFijo;
		var $TelefonoMovil;
		var $Direccion;
		var $fecha;

		//Método constructor
		public function Usuario() {

		}

		public function Actualizar($CedulaID, $Nombre, $Apellido, $TelefonoFijo, $TelefonoMovil, $Direccion,
								   $fecha) {
			
			$con = new conexion();
			$miConexion = $con->miConexion;	

			$actualizacion = "UPDATE usuario SET `CedulaID`= '$CedulaID',
												 `Nombre` = '$Nombre',
												 `Apellido` = '$Apellido',
												 `Telefono` = '$TelefonoFijo',
												 `Movil` = '$TelefonoMovil',
												 `Direccion` = '$Direccion',
												 `fechaIngreso` = '$fecha' 
							  				WHERE `CedulaID` = '$CedulaID'";

			$resultado = $miConexion->query($actualizacion);
			
			if ($resultado) {
				
				$mensaje = "Los datos fueron actualizados exitosamente";
				$miConexion->close();
				return $mensaje;

			}else{

				$mensaje = "Se presentó un error al intentar actualizar los datos";
				$miConexion->close();
				return $mensaje;

			}				  				

		}

		public function Consultar($CedulaID) {

			$con = new conexion();
			$miConexion = $con->miConexion;
		
			$consulta = "SELECT `CedulaID`, `Nombre`, `Apellido`, `Telefono`, `Movil`, `Direccion`, `fechaIngreso`
			 from `usuario` where `CedulaID` = '$CedulaID'";
			$resultado = $miConexion->query($consulta);

			$miConexion->close();
			return $resultado;

		}

		public function Eliminar(){

			$con = new conexion();
			$miConexion = $con->miConexion;

			



		}

		public function Registrar($CedulaID, $Nombre, $Apellido, $TelefonoFijo, $TelefonoMovil, 
								  $Direccion, $fecha) {

			$con = new conexion();
			$miConexion = $con->miConexion;

			$insercion = "INSERT INTO `usuario` (`CedulaID`, `Nombre`, `Apellido`, `Telefono`,`Movil`,
			 `Direccion`,`fechaIngreso`) values ('$CedulaID', '$Nombre', '$Apellido', '$TelefonoFijo', '$TelefonoMovil', '$Direccion', '$fecha')";

					$resultado1 = $miConexion->query($insercion);
					
					if ($resultado1==1) {
					    $nota = "Los datos del usuario fueron registrados exitosamente";
					    $miConexion->close(); 
					    return $nota;
					}else{
					    $nota = "Ha ocurrido un error al registrar los datos del usuario.";
					    $miConexion->close(); 
					    return $nota;
					}
					
		}

	}

?>