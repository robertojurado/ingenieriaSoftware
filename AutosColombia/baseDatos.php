<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "autoscol_usuario";

$conexion = mysqli_connect($server, $username, $password, $database);

if ($conexion->connect_error) {
	die("Fatal error");
}






