<!DOCTYPE html>
<html>
<head>
	<title>Parqueadero Autos Colombia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/estilos5.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/8eb4c02fac.js" crossorigin="anonymous"></script>
</head>
<body>

	<header>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="row">
					<a href="menu.php" alt="Menú AutoColombia"><img src="imagenes/logoAutosColombia.jpeg" alt="AutoColombia"></a>
				</div>
				<div class="row">
					<p><a id="vinculo1"><strong>www.AutoColombia.com</strong></a>
				   		<br>Parqueadero de vehículos por mensualidad
					</p>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</header>

	<div class="row" id="titulo">
		<div class="col-sm-4"></div>	
		<div class="col-sm-4">
			<h3>Registro de Clientes</h3>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row" id="">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="">
				<div class="form-group">
					<input type="number" name="cedulaCliente" class="icono-placeholder" 
					placeholder=" Escribe aquí el número de cédula del cliente" required>
				</div>
				<div class="form-group">
					<input type="text" name="nombresCliente" class="icono-placeholder"
					placeholder=" Escribe aquí los nombres del cliente" required>
				</div>		
				<div class="form-group">
					<input type="text" name="apellidosCliente" class="icono-placeholder"
					placeholder=" Escribe aquí los apellidos del cliente" required>
				</div>
				<div class="form-group">
					<input type="tel" name="telefonoFijoCliente" class="icono-placeholder"
					placeholder=" Escribe aquí el número de teléfono fijo del cliente" required>
				</div>
				<div class="form-group">
					<input type="tel" name="telefonoMovilCliente" class="icono-placeholder"
					placeholder=" Escribe aquí el número de teléfono móvil del cliente" required>
				</div>
				<div>
					<input type="tel" name="direccionCliente" class="icono-placeholder"
					placeholder=" Escribe aquí la dirección del cliente" required>	
				</div>
				<div class="form-group">
					<input type="date" name="fechaIngreso" class="icono-placeholder"
					placeholder=" Escribe aquí la fecha de ingreso del cliente" required>	

					<input type="submit" name="consultarPlaca" value="Registrar datos">

					<?php
					require_once 'usuario.php'; 	 
					    if (isset($_POST["cedulaCliente"]) && isset($_POST["nombresCliente"]) 
					    	&& isset($_POST["apellidosCliente"]) && isset($_POST["telefonoFijoCliente"])
					        && isset($_POST["telefonoMovilCliente"]) && isset($_POST["direccionCliente"])
					    	&& isset($_POST["fechaIngreso"])) {

					    	$cedula = $_POST["cedulaCliente"];
					    	$nombre = $_POST["nombresCliente"];
					    	$apellidos = $_POST["apellidosCliente"];
					    	$telFijo = $_POST["telefonoFijoCliente"];
					    	$telMovil = $_POST["telefonoMovilCliente"];
					    	$direccion = $_POST["direccionCliente"];
					    	$fecha = $_POST["fechaIngreso"];

					    	$miusuario1 = new usuario();

					    	$mensaje = $miusuario1->Registrar($cedula, $nombre, $apellidos, $telFijo, $telMovil, $direccion, $fecha);

					    }
			?>
				<p class="mensaje"><?php
					if (isset($mensaje)) {
					 	echo $mensaje;
					 }else{
					 	echo "";
					 } 
					?></p>
				

				</div>
					
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>	
	
</body>
</html>