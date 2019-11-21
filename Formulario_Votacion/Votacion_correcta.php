<?php

include('../conexion.php');
$equipo1 =$_POST['equipo1'];
$equipo1 = $equipo1+ 1;
echo $equipo1;
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
				<p id="titulos">Voto guardado correctamente</p>
				<img src="../imagenes/correcto.png" id="header">
				<p id="textos">Mil gracias, su voto ha sido guardado correctamente<br><br><a href="../index.html">Volver al inicio</a></p>
			</td>
		</tr>	
	</table>
	</center>
</body>
</html>