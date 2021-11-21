<!DOCTYPE html>
<html>
<head>
	<title>Parqueadero Autos Colombia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="css/estilos1.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/8eb4c02fac.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="row">
			<div class="col-4">
				<img src="imagenes/logoAutosColombia.jpeg">
			</div>
			<div class="col-8">	
			</div>
		</div>
		<div class="row" id="fila2">
			<div class="col-4">
				<p><a id="vinculo1"><strong>www.AutoColombia.com</strong></a>
				   <br>Parqueadero de vehículos por mensualidad
				</p>
				
			</div>
			<div class="col-8"></div>
		</div>
	</header>

	<div id="areaFormulario">

		<form method="post" action="validacion.php" name="frmLogin">
			<div class="form-group row" >
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<input type="text" class="icono-placeholder" placeholder="  Ingresar usuario" id="input1" 
					name="txtUsuario" required>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<input type="Password" class="icono-placeholder" placeholder="  Ingresar Password" id="input2"
					name="txtClave" required>
				</div>
				<div class="col-sm-4">

				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-3">
							<ul>	
								<li><a href="registrarse.html" class="vinculos2">Registrarse</a></li>
								<li><a href="recuperarContrasena.html" class="vinculos2">¿Olvidaste tu contraseña?</a></li>
							</ul>
						</div>
						<div class="col-sm-5">
							<input type="submit" name="Ingresar" value="Ingresar" id="boton">
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<p class="mensaje"><?php require_once "validacion.php"; 
											   if (isset($mensaje) && !empty($mensaje)) {
											    	echo "$mensaje";
											    } else{
											    	echo "";
											    }
						?></p>
					</div>
					<div class="col-sm-4"></div>
				</div>
			</div>
		</form>
	</div>	
</body>
</html>