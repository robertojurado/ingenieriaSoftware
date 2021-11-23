<?php
	require 'vehiculo.php'; 

	if (isset($_POST["placaVehiculo"]) && isset($_POST["marcaVehiculo"]) && isset($_POST["colorVehiculo"]) && 
		isset($_POST["modeloVehiculo"]) && isset($_POST["claseVehiculo"]) && isset($_POST["cedulaPropietario"])) {
		$placa = $_POST["placaVehiculo"];
		$marca = $_POST["marcaVehiculo"];
		$color = $_POST["colorVehiculo"];
		$modelo = $_POST["modeloVehiculo"];
		$clase = $_POST["claseVehiculo"];	
		$cedula = $_POST["cedulaPropietario"];

		$miVehiculo = new Vehiculo();

		$miVehiculo->Registrar($placa, $marca, $color, $modelo, $clase, $cedula);
		
	}

?>