<!DOCTYPE html>
<html>
<head>
	<title>Parqueadero Autos Colombia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/estilos2.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/8eb4c02fac.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="collapse" id="navbarToggleExternalContent">
  		<div class="bg-dark p-4">
    		<h5 class="text-white h4">Collapsed content</h5>
    		<span class="text-muted">Toggleable via the navbar brand.</span>
  		</div>
	</div>
	<nav class="navbar navbar-dark bg-dark">
  		<div class="container-fluid">
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
     		 <span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="btn-group" role="btn-group" justify-content="flex-end">
  				<button type="button" class="btn btn-dark"><span><i class="far fa-bell"></i></span></button>
  				<button type="button" class="btn btn-dark"><span><i class="far fa-question-circle"></i></span></button>
  				<button type="button" class="btn btn-dark"><span><i class="fas fa-user-circle"></i></span></button>
  				<button type="button" class="btn btn-dark"><span><i class="fas fa-angle-down"></i></span></button>
  			</div>
  		</div>
	</nav>

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

	<form>
		<div class="row" id="formulario">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="form-group row">
					<label for="registroAutomovil">Ingrese placa</label>
					<br>
					<select id="registroAutomovil" class="selectpicker">
						<option selected>FGX3</option>
						<option></option>
						<option></option>
					</select>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
					<input type="button" value="Ingreso vehículo" class="botonFormulario">
					<input type="button" value="Salida vehículo" class="botonFormulario">
			</div>
			<div class="col-sm-4"></div>
		</div>
	</form>

</body>
</html>