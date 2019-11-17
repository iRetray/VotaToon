<?php
include('../conexion.php');
// Verificar que haya una votacion activa
/*
$consulta = "SELECT * FROM `votaciones` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$hayVotacionActiva = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['nombreColegio']!="") {
		$hayVotacionActiva = true;
	} 
}
if ($hayVotacionActiva) {
	header("Location:../errorNoVotacionActiva.php");
}
else{
	header("Location:../registrar.php");
}
*/

header("Location:errorNoVotacionActiva.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>VotaToon</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body class="bodyStyle">

</body>
</html>