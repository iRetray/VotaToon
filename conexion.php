<?php
	$servidor = "localhost";
	$usuarioBD = "root";
	$contraseña = "";
	$baseDeDatos = "votaciones";
	$conexion = mysqli_connect($servidor, $usuarioBD, $contraseña, $baseDeDatos) or die ("La conexion al servidor no fue establecida"); // Check connection al servidor
	$db = mysqli_select_db($conexion,$baseDeDatos) or die ("No se logro conectar a la base de datos"); // Check connection a la base de datos
?>