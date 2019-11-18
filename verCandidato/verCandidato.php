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
							<p id="textos"><strong><?php echo $columna['nombre1'] ?></strong></p>
							<p id="textos"><?php echo $columna['correo1'] ?></p>
							<?php echo "<img src='".$columna['foto1']."' width='100%'></img>";
							?>
							<p id="textos"><?php echo $columna['descripcion1'] ?></p>
						</td>
						<td id="mitad">
							<p id="textos"><strong><?php echo $columna['nombre2'] ?></strong></p>
							<p id="textos"><?php echo $columna['correo2'] ?></p>
							<?php echo "<img src='".$columna['foto2']."' width='100%'></img>";
							?>
							<p id="textos"><?php echo $columna['descripcion2'] ?></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr id="general" align="center">
			<td id="error" align="center">
				<p id="textos">Plan de Gobierno</p>
				<center><img src="../imagenes/pdf.png" id="pdf"></center>
				<?php echo "<a href='".$columna['plan']."' download=PlanDeGobierno>Descargar Plan de Gobierno
				</a>" ?>
			</td>
		</tr>
	</table>
	</center>

	<center><p id="textos"><a href="../index.html">Volver al inicio</a></p></center>
</body>
</html>