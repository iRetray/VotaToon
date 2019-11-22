<?php  
include('../conexion.php');

$documento=$_POST['documento'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Formulario_Votación</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<center><img src="../imagenes/ver.png" id="hins"></center>

	<?php

	$consulta = "SELECT * FROM `candidatos` WHERE 1"; //realiza una consulta en el servidor localost, con el usuario root
	$resultado = mysqli_query($conexion, $consulta);
	$consultavotantehabilitado = "SELECT * FROM `votantes` WHERE (identificacion=$documento);";
	$valides = mysqli_query($conexion, $consultavotantehabilitado);
	$columna1 = mysqli_fetch_array( $valides );
	if ($columna1["ya_voto?"]){ //Si se encuentra registrado puede votar, si no, NO!
		if ($columna1["ya_voto?"]=='NOT') {

			while ($columna = mysqli_fetch_array( $resultado ))//Mientras haya algo, lo que sea en la columna 
			
			{
			echo "<center>
			<table id='estiloSombraFormulario'>
				<tr id='general' align='center'>
					<td id='error' align='center'>
						<p id='titulos'>Tarjetón # ".$columna['ID']. ": ".$columna['nombre1']. " y " .$columna['nombre2']."</p>
						<table id='home' align='center'>
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
					<td id='mitad' align='center'>
					<form action='Votacion_correcta.php' method='post'> 
						<p><input type='hidden' name='documento' value='".$documento."'</p>
						<p>YO VOTO POR EL EQUIPO # <input type='submit' name='equipo' value=".$columna['ID']." class='btn btn-success'></p>

						</form>
					</td>
				</tr>
			</table>
			</center>";			
			}//end del while
			
			
/*			"<center>
				<table id='estiloSombraFormulario'>
					<tr id='general' align='center'>
						<td id='mitad' align='center'>
							<p id='titulos'>Tarjetón # ".$columna['ID']. ": ".$columna['nombre1']. " y " .$columna['nombre2']."</p>
							<table id='home' align='center'>
										<tr id='general' align='center'>
											<td id='mitad' align='center'>
												<img src='../imagenes/voto_blanco.png'></img>
											</td>
											<td id='mitad'>
												<p id='textos'><strong>VOTO EN BLANCO</strong></p>
											</td>
											<td id='mitad'>
												<p id='textos'><strong>VOTO EN BLANCO</strong></p>
											</td>
										</tr>
							</table>
						</td>
					</tr>
				</table>
			</center>";*/

		} //end del if

		else {
			header("Location:Error_votacion.php");
		}
	}
	else{
		header("Location:Error_votacion.php");
	}	
	//msql_close($conexion);


	?>

	<center><p id="textos"><a href="../index.html">Volver al inicio</a></p></center>


</body>
</html>