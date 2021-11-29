
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
			<h3>Consultar cliente</h3>
		</div>
		<div class="col-sm-4"></div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form method="post" action="">
				<input type="number" class="icono-placeholder" name="cedula" placeholder=" Escribe aquí el número de cédula del cliente" required>
				<input type="submit" value="Consultar" id="consultar">
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">CédulaID</th>
					<th scope="col">Nombres</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Teléfono fijo</th>
					<th scope="col">Teléfono Móvil</th>
					<th scope="col">Dirección</th>	
					<th scope="col">Fecha afiliación</th>
				</tr>
			</thead>
			<tbody>

				<?php
					require_once 'usuario.php';
					if (isset($_POST['cedula'])) {
						$cedula = $_POST['cedula'];	
					}
					
					$miusuario = new usuario();

					if (isset($cedula)) {

						$resultados = $miusuario->Consultar($cedula);

						$numFilas = mysqli_num_rows($resultados);

						if (isset($numFilas) && $numFilas > 0) {

							while ($filas=$resultados->fetch_assoc()) {
				?>		
				<tr>
								<td><?php echo $filas['CedulaID']; ?></td>
								<td><?php echo $filas['Nombre']; ?></td>
								<td><?php echo $filas['Apellido']; ?></td>
								<td><?php echo $filas['Telefono']; ?></td>
								<td><?php echo $filas['Movil']; ?></td>
								<td><?php echo $filas['Direccion']; ?></td>
								<td><?php echo $filas['fechaIngreso'];?></td>  
									<?php $mensaje = ""; ?>
				</tr>			
				<?php
							}

						}else{

							$mensaje = "No se hallaron registros relacionados con el número de cédula ".$cedula;

						}

					}

				?>	
				
			</tbody>
		</table>
		<p class="mensaje"><?php 
			if (isset($mensaje)) {
				echo $mensaje;
			}
				
		    ?></p>
		 </div>
		 <div class="col-sm-3"></div>   

	</div>

</body>
</html>