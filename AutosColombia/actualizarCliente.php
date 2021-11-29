
					
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
			<h3>Editar información de Clientes</h3>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row" id="">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form method="post" action="">
				<div class="form-group">
					<input type="number" name="cedula" class="icono-placeholder" 
					placeholder=" Escribe aquí el número de cédula del cliente"
					id="cedula">
				</div>
				<div class="form-group">
					<input type="text" name="nombre" class="icono-placeholder"
					placeholder=" Escribe aquí los nombres del cliente" 
					id="nombre">
				</div>		
				<div class="form-group">
					<input type="text" name="apellidos" class="icono-placeholder"
					placeholder=" Escribe aquí los apellidos del cliente" 
					id="apellidos">
				</div>
				<div class="form-group">
					<input type="tel" name="telFijo" class="icono-placeholder"
					placeholder=" Escribe aquí el número de teléfono fijo del cliente" 
					id="telFijo" >
				</div>
				<div class="form-group">
					<input type="tel" name="telMovil" class="icono-placeholder"
					placeholder=" Escribe aquí el número de teléfono móvil del cliente" 
					id="telMovil"> 
				</div>
				<div>
					<input type="text" name="direccion" class="icono-placeholder"
					placeholder=" Escribe aquí la dirección del cliente"
					id="direccion">	
				</div>
				<div class="form-group">
					<input type="date" name="fechaIngreso" class="icono-placeholder"
					placeholder=" Escribe aquí la fecha de ingreso del cliente"
					id="fecha">

					<input type="submit" name="verDatosCliente" value="Ver datos" class="actualizar"
							id="verDatos">
						
					<input type="submit" name="actualizarCliente" value="Editar datos"
							class="actualizar" id="actualizar">				

<?php
					require_once 'usuario.php'; 

						if (isset($_POST["verDatosCliente"])) {
							
							if (isset($_POST["cedula"])) {
								
								$cedulaId = $_POST["cedula"];

								$miUsuario = new usuario();

								$consulta = $miUsuario->Consultar($cedulaId);

								$filas = mysqli_num_rows($consulta);

								if ($filas > 0) {
									
									$arreglo = $consulta->fetch_assoc();

?>

<script type="text/javascript">
	
function llenarDatos(){

	input1 = document.getElementById("cedula");
	prueba = " <?php echo $cedulaId; ?> ";
	input1.value = parseFloat(prueba);

	input2 = document.getElementById("nombre");
	input2.value = " <?php echo $arreglo['Nombre']; ?>";

	input3 = document.getElementById("apellidos");
	input3.value = " <?php echo $arreglo['Apellido']; ?>";

	input4 = document.getElementById("telFijo");
	input4.value = " <?php echo $arreglo['Telefono']; ?>";

	input5 = document.getElementById("telMovil");
	input5.value = " <?php echo $arreglo['Movil']; ?>";

	input6 = document.getElementById("direccion");
	input6.value = " <?php echo $arreglo['Direccion']; ?>";

	input7 = document.getElementById("fecha");
	miFecha = "<?php echo $arreglo['fechaIngreso'];?>"; 

	var fecha = new Date(miFecha);

	var anio = fecha.getFullYear();
	var mes = fecha.getMonth() + 1;
	var dia = fecha.getDate();

	if(mes<10){
		mes = "0"+ mes;
	}

	if (dia<10) {
		dia = "0" + dia;
	}

	input7.value = anio + "-" + mes + "-" + dia;

}

miboton = document.getElementById("verDatos");
miboton.onclick = llenarDatos();

</script>

<?php

									$mensaje = "La consulta se realizó exitosamente";

								}else{
									$mensaje  = "No existen registros relacionados con el número de cédula ".$cedulaId;
								}

							}

						}

						if (isset($_POST["actualizarCliente"])) {
							
							if (isset($_POST["cedula"]) && isset($_POST["nombre"]) 
					    		&& isset($_POST["apellidos"]) && isset($_POST["telFijo"])
					        	&& isset($_POST["telMovil"]) && isset($_POST["direccion"])) {

					    		$cedula1 = $_POST["cedula"];
					    		$nombre1 = $_POST["nombre"];
					    		$apellidos1 = $_POST["apellidos"];
					    		$telFijo1 = $_POST["telFijo"];
					    		$telMovil1 = $_POST["telMovil"];
					    		$direccion1 = $_POST["direccion"];
					    		$fecha1 = $_POST["fechaIngreso"];

					    		$miusuario1 = new usuario();

					    		$mensaje = $miusuario1->Actualizar($cedula1, $nombre1, $apellidos1, $telFijo1, 
					    			$telMovil1, $direccion1, $fecha1);

					    	}

						}
   
?>


				<p class="mensaje">
					<?php
						if (isset($mensaje)) {
					 		echo $mensaje;
					 	}else{
					 		echo "";
					 	} 
					?>						
					</p>
				
				</div>

			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>	
	
</body>
</html>