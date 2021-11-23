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
			<h3>Registro de Vehículos</h3>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row" id="">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="operacionRegistroV.php">
				<div class="form-group">
					<input type="text" name="placaVehiculo" class="icono-placeholder" 
					placeholder=" Escribe aquí el número de placa del vehículo" required>
				</div>
				<div class="form-group">
					<input type="text" name="marcaVehiculo" class="icono-placeholder"
					placeholder=" Escribe aquí la marca del vehículo" required>
				</div>		
				<div class="form-group">
					<input type="text" name="colorVehiculo" class="icono-placeholder"
					placeholder=" Escribe aquí el color del vehículo" required>
				</div>
				<div class="form-group">
					<input type="tel" name="modeloVehiculo" class="icono-placeholder"
					placeholder=" Escribe aquí el modelo del vehículo" required>
				</div>
				<div class="form-group">
					<input type="tel" name="claseVehiculo" class="icono-placeholder"
					placeholder=" Escribe aquí la clase del vehículo" required>
				</div>
				<div class="form-group">
					<input type="tel" name="cedulaPropietario" class="icono-placeholder"
					placeholder=" Escribe aquí el número de cédula del propietario del vehículo" required>
				</div>
			</form>
		</div>
		<div class="col-sm-3"></div>	
	</div>

	<div class="row">	
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<input type="submit" name="consultarPlaca" value="Consultar placa">
				<p><?php
					require_once 'operacionRegistroV.php'; 	 
					    if (isset($mensaje)) {
					       	echo $mensaje;				
					       }				
				   ?></p>
		</div>		   
		<div class="col-sm-3"></div>
	</div>
	
</body>
</html>