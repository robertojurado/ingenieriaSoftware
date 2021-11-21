<?php
	session_start();
	require_once('baseDatos.php');
	if (isset($_POST['txtUsuario']) && isset($_POST['txtClave'])) {
		$usuario = $_POST['txtUsuario'];
		$_SESSION['usuario'] = $usuario;	
		$clave = $_POST['txtClave'];

		$consulta = "SELECT * from `empleado` where `Usuario` = '$usuario' and `Clave` = '$clave' ";

		$resultado = mysqli_query($conexion, $consulta);

		if (!empty($resultado) && isset($resultado)) {
			
			$filas = mysqli_num_rows($resultado);

			if (isset($filas) && $filas > 0) {
				header("Location:menu.php");
			}else{
				$mensaje = "Usuario o clave incorrectos";
				include_once "index.php";
			}	

			mysqli_free_result($resultado);	
			mysqli_close($conexion);

		}

	}	

?>