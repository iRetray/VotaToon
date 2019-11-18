<?php
include('../conexion.php');

$consulta = "SELECT * FROM `candidatos` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$hayCandidatos = false;
while ($columna = mysqli_fetch_array( $resultado ))
{
	if ($columna['nombre1']!="") {
		$hayCandidatos = true;
	} 
}
if ($hayCandidatos) {
	header("Location:verCandidato.php");
}
else{
	header("Location:errorCandidato.php");
}

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