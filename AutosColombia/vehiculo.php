<?php 
	
	require_once "dbautoscolombia";

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

			if (isset($Placa)) {
				
				$query = "SELECT * from `autoscolombia` where `PlacaID` = '$placa'";

				$resultado = mysqli_query($conexion, $consulta);

				if (!empty($resultado) && isset($resultado)) {
			
					$filas = mysqli_num_rows($resultado);

					if (isset($filas) && $filas > 0) {
						echo '<table class="table">';
						echo '<tr>';
						echo "<th>Placa</th>";
						echo "<th>Marca</th>";
						echo "<th>Color</th>";
						echo "<th>Clase vehículo</th>";
						echo "<th>Cédula propietario</th>";
						echo '<tr>';
						for	
						echo '</table>'
					}else{
						$mensaje = "Lo sentimos, el vehículo no ha sido registrado aún en nuestra base de datos";
						include 'registroVehiculo.php';
					}

					mysqli_free_result($resultado);	
					mysqli_close($conexion);

				}

			}

		}

		public function Registrar($placa, $Marca, $Color, $Modelo, $ClaseVehiculo, $CedulaID) {
			$insercion = "INSERT INTO `vehiculo`(`PlacaID`, `Marca`, `Color`, `Modelo`, `ClaseVehiculo`, `CedulaID`) VALUES (`$placa`, `$Marca`, `$Color`, `$Modelo`, `CedulaID`)";
			$resultado = $conexion->query($insercion);
			if (!$resultado) {
				die("Acceso a base de datos fallido");
			}else{
				$mensaje = 'Vehículo registrado exiosamente';
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