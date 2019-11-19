<?php

include('../conexion.php');

$tarjeton = $_POST['tarjeton']
$consulta = "SELECT * FROM `` WHERE 1";
$consulta = "SELECT * FROM `resultados` WHERE 1";
$resultado = mysqli_query($conexion, $consulta);
$columna = mysqli_fetch_array( $tarjeton );
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$resultados = $_POST['resultados'];

while ($columna mysqli_fetch_array( $tarjeton )) {
	# code...
}

$consulta = "INSERT INTO `resultados`(`tarjeton`,`nombre1`, `nombre2`, `resultados`) VALUES ('$tarjeton',$nombre1','$nombre2','$resultados')";
if (mysqli_query($conexion, $consulta)) {
} else {
      echo "Error: en sistema por favor vuelva a votar " . $consulta . "<br>" . mysqli_error($conexion);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>VotaToon</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">
</head>
<body class="bodyStyle">
	<center>
	<table id="estiloSombraFormulario" align="center">
		<tr id="general" align="center">
			<td id="error">
				<p id="titulos">Incripcion creada correctamente</p>
				<img src="../imagenes/correcto.png" id="header">
				<p id="textos">Ha quedado inscrito en el sistema su <strong>participación como candidatos.</strong> Ahora podran ser elegidos <strong>el dia de las votaciones.</strong><br><br><a href="../index.html">Volver al inicio</a></p>
			</td>
		</tr>	
	</table>
	</center>
</body>
</html>