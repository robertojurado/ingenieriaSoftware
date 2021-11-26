
<!DOCTYPE html>
<html>
<head>
	<title>Parqueadero Autos Colombia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/estilos4.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/8eb4c02fac.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="row">
					<img src="imagenes/logoAutosColombia.jpeg">
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

	<div class="row">
		<div class="col-sm-12" id="titulo6">
			<h6><strong>Bienvenid@ <?php require_once "validacion.php";
			echo $_SESSION["usuario"] ?>, ¿qué deseas hacer?
			</strong></h6>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" id="areaLista">
			<ul>
				<li><a href="gestionarUsuario.php">Gestionar usuario</a></li>
				<li><a href="gestionarVehiculo.php">Gestionar vehículo</a></li>
				<li><a href="gestionarCelda.php">Gestionar celda</a></li>
				<li><a href="generarCobro.php">Generar cobro mensualidad</a></li>
			</ul>
		</div>
		<div class="col-sm-4"></div>
	</div>
		
</body>
</html>