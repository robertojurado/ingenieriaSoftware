<?php 

	require 'conexion.php';

	class Vehiculo {

		var $PlacaID;
		var $Marca;
		var $Color;
		var $Modelo;
		var $ClaseVehiculo;
		var $CedulaID;

		public function Vehiculo() {

		} 

		public function Consultar($Placa) {

			$con = new conexion();

			$miConexion1 = $con->miConexion;
		
			$consulta = "SELECT `PlacaID`, `Marca`, `Color`, `Modelo`, `ClaseVehiculo`, `CedulaID` from `vehiculo` where `PlacaID` = '$Placa'";
			$resultado = $miConexion1->query($consulta);

			$miConexion1->close();
			return $resultado;

		}	

		public function Registrar($placa, $marca, $color, $modelo, $claseVehiculo, $cedulaID) {

			$con2 = new conexion();

			$miConexion2 = $con2->miConexion;

			$insercion = "INSERT INTO `vehiculo` (`PlacaID`, `Marca`, `Color`, `Modelo`,`ClaseVehiculo`, `CedulaID`) values ('$placa', '$marca', '$color', '$modelo', '$claseVehiculo', '$cedulaID')";

					$resultado1 = $miConexion2->query($insercion);
					
					if ($resultado1==1) {
					    $nota = "Los datos del vehículo fueron registrados exitosamente";
					    $miConexion2->close(); 
					    return $nota;
					}else{
					    $nota = "Ha ocurrido un error al registrar los datos del vehículo.";
					    $miConexion2->close(); 
					    return $nota;
					}

		}

		public function GestionarEntrada() {
			$objeto = new DateTime();
			$objeto->setTimeZone(new DateTimeZone('America/Bogota'));
			$DateAndTime = $objeto->format("d-m-y h:i:s a");
			return $DateAndTime;
		}

		public function GestionarSalida() {
			$objeto = new DateTime();
			$objeto->setTimeZone(new DateTimeZone('America/Bogota'));
			$DateAndTime = $objeto->format("d-m-y h:i:s a");
			return $DateAndTime;
		}

	}

?>