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
	<center>
	<table id="estiloSombra">
		<tr id="general" align="center">
			<td id="error" align="center">
				<p id="titulos">Tarjetón # <?php echo $numeroOpcion; ?> </p>
				<p id="titulos">
					<?php echo $columna['nombre1']." y ".$columna['nombre2'] ?>
				</p>
				<table id="home" align="center">
					<tr id="general" align="center">
						<td id="mitad" align="center">
							//imagen
							<p id="textos"><strong><?php echo $columna['nombre1'] ?></strong></p>
							<p id="textos"><?php echo $columna['correo1'] ?></p>
							<p id="textos"><?php echo $columna['descripcion1'] ?></p>
						</td>
						<td id="mitad">
							//imagen
							<p id="textos"><strong><?php echo $columna['nombre2'] ?></strong></p>
							<p id="textos"><?php echo $columna['correo2'] ?></p>
							<p id="textos"><?php echo $columna['descripcion2'] ?></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr id="general" align="center">
			<td id="error" align="center">
				<p id="textos">Hoja de vida</p>
				<p><?php echo $columna['plan'] ?></p>
			</td>
		</tr>
	</table>
	</center>

	<center><p id="textos"><a href="../index.html">Volver al inicio</a></p></center>
</body>
</html>