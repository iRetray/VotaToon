<?php

include('../conexion.php');

$nombre1 = $_POST['nombre1'];
$correo1 = $_POST['correo1'];
$descripcion1 = $_POST['descripcion1'];

$nombreFoto1 = $_FILES['foto1']['name'];
$rutaFoto1 = $_FILES['foto1']['tmp_name'];
$destinoFoto1 = "fotos/".$nombreFoto1;
copy($rutaFoto1, $destinoFoto1);

$nombre2 = $_POST['nombre2'];
$correo2 = $_POST['correo2'];
$descripcion2 = $_POST['descripcion2'];
$foto2 = $_POST['foto2'];

$nombreFoto2 = $_FILES['foto2']['name'];
$rutaFoto2 = $_FILES['foto2']['tmp_name'];
$destinoFoto2 = "fotos/".$nombreFoto2;
copy($rutaFoto2, $destinoFoto2);

$plan = $_POST['plan'];

$consulta = "INSERT INTO `candidatos`(`nombre1`, `correo1`, `descripcion1`, 'foto1',`nombre2`, `correo2`, `descripcion2`, 'foto2', `plan`) VALUES ('$nombre1','$correo1','$descripcion1', '$destinoFoto1','$nombre2','$correo2','$descripcion2', '$destinoFoto2','$plan')";
if (mysqli_query($conexion, $consulta)) {

} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
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