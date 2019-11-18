<?php  
$usuarioDB = "root";
$contraseña = "";
$servidor = "localhost";
$baseDeDatos = "votaciones";
$conexion = mysqli_connect($servidor, $usuarioDB, $contraseña, $baseDeDatos)
or die ("Error al conectar al servidor"); 
$db = mysqli_select_db($conexion, $baseDeDatos)
or die ("Eror al conectar a la BD");

$consulta = "SELECT * FROM `candidatos` WHERE 1";
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
</head>
<body>
	<center><img src="../imagenes/ver.png" id="hins"></center>

	<?php

	$consulta = "SELECT * FROM `candidatos` WHERE 1";
	$resultado = mysqli_query($conexion, $consulta);
	while ($columna = mysqli_fetch_array( $resultado ))
	{

		echo "<center>
	<table id='estiloSombraFormulario' >
		<tr id='general' align='center'>
			<td id='error' align='center'>
				<p id='titulos'>Tarjetón # ".$columna['ID']."</p>
				<p id='textos'>
					".$columna['nombre1']." y ".$columna['nombre2']."
				</p>
				<table id='home' align='center'>
					<tr id='general' align='center'>
						<td id='mitad' align='center'>
							<p id='textos'><strong>".$columna['nombre1']."</strong></p>
							<p id'textos'>".$columna['correo1']."</p>
							<img src='".$columna['foto1']."' width='100%'></img>
							<p id='textos'>".$columna['descripcion1']."</p>
						</td>
						<td id='mitad'>
							<p id='textos'><strong>".$columna['nombre2']."</strong></p>
							<p id='textos'>".$columna['correo2']."</p>
							<img src='".$columna['foto2']."' width='100%'></img>
							<p id='textos'".$columna['descripcion2']."</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr id='general' align='center'>
			<td id='error' align='center'>
				<p id='textos'>Plan de Gobierno</p>
				<center><img src='../imagenes/pdf.png' id='pdf'></center>
				<a href='".$columna['plan']."' download=PlanDeGobierno.pdf>Descargar Plan de Gobierno
				</a>
			</td>
		</tr>
	</table>
	</center>";			
	}
	?>

	


	<center><p id="textos"><a href="../index.html">Volver al inicio</a></p></center>
</body>
</html>