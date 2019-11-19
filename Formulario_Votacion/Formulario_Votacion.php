<?php  
include('../conexion.php');
		
	$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)or die ("Error al conectar al servidor"); 
	$db = mysqli_select_db($conexion, $baseDeDatos)	or die ("Eror al conectar a la BD");
	$consulta = "SELECT * FROM `resultados` WHERE 1";
	$resultado = mysqli_query($conexion, $consulta);
	$columna = mysqli_fetch_array( $resultado );

	$consulta = "SELECT * FROM `candidatos` WHERE ID =1";
	$resultado = mysqli_query($conexion, $consulta);
	$numeroOpcion = 1;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Ver Candidato</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<center><img src="../imagenes/ver.png" id="hins"></center>

	<?php

	$consulta = "SELECT * FROM `candidatos` WHERE 1";
	$resultado = mysqli_query($conexion, $consulta);
	while ($columna = mysqli_fetch_array( $resultado ))
	{

		echo "<center>
	<table id='estiloSombraFormulario' border='1'>
		<tr id='general' align='center'>
			<td id='error' align='center'>
				<p id='titulos'>Tarjetón # ".$columna['ID']. ": ".$columna['nombre1']. " y " .$columna['nombre2']."</p>
				<table id='home' align='center' border='1'>
					<tr id='general' align='center'>
						<td id='mitad' align='center'>
							<p id='textos'><strong>".$columna['nombre1']."</strong></p>
							<img src='".$columna['foto1']."' width='100%'></img>
						</td>
						<td id='mitad'>
							<p id='textos'><strong>".$columna['nombre2']."</strong></p>
							<img src='".$columna['foto2']."' width='100%'></img>
						</td>
					</tr>
				</table>
			</td>
			<td id='error' align='center'>
			<form action='Votacion_correcta.php' method='post'>
				<p><input type='submit' value='YO VOTO POR EL EQUIPO # ".$columna['ID']."' class='btn btn-success'></p>
				</form>
			</td>
		</tr>
	</table>
	</center>";			

	}

	?>

	


	<center><p id="textos"><a href="../index.html">Volver al inicio</a></p></center>
</body>
</html>