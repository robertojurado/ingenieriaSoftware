
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
			<h3>Consultar vehículo</h3>
		</div>
		<div class="col-sm-4"></div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form method="post" action="">
				<input type="number" class="icono-placeholder" name="placa" placeholder=" Escribe aquí el número de placa del vehículo" required>
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
					<th scope="col">Placa</th>
					<th scope="col">Marca</th>
					<th scope="col">Color</th>
					<th scope="col">Modelo</th>
					<th scope="col">Clase</th>
					<th scope="col">Cédula Propietario</th>	
				</tr>
			</thead>
			<tbody>

				<?php
					require_once 'vehiculo.php';
					if (isset($_POST['placa'])) {
						$placa = $_POST['placa'];	
					}
					
					$mivehiculo = new Vehiculo();

					if (isset($placa)) {

						$resultados = $mivehiculo->Consultar($placa);

						$numFilas = mysqli_num_rows($resultados);

						if (isset($numFilas) && $numFilas > 0) {

							while ($filas=$resultados->fetch_assoc()) {
				?>		
				<tr>
								<td><?php echo $filas['PlacaID']; ?></td>
								<td><?php echo $filas['Marca']; ?></td>
								<td><?php echo $filas['Color']; ?></td>
								<td><?php echo $filas['Modelo']; ?></td>
								<td><?php echo $filas['ClaseVehiculo']; ?></td>
								<td><?php echo $filas['CedulaID']; 
										   $mensaje = "";?></td>
				</tr>			
				<?php
							}

						}else{

							$mensaje = "No se hallaron registros relacionados con el número de placa ".$placa;

						}

						$resultados->free();
						if (isset($mysqli)) {
							$mysqli->close();
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