<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>VotaToon</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body class="bodyStyle">
<div align="center">
<img src="imagenes/headerLastR.png" id="header" align="center">
</div>
<div>
	<table id="home">
		<tr id="general">
			<td id="left">
				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<center><img src="imagenes/resultado.png" id="resultado"></center>
							<p id="titulos">Consultar Resultados</p>
							<p id="textos">Haz clic abajo para conocer los ganadores de las votaciones que ya han finalizado.</p>
						</td>
					</tr>
					<form method="post">
					
					<tr id="general" align="center">
						<td id="general">
							<input type="submit" name="" value="Consultar" id="submit">

						</td>
					</tr>
					<tr>
						<td>
							<br>
							<br>
						</td>
					</tr>
					</form>
				</table>

				<br>
				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<center><img src="imagenes/calendario.png" id="calendario"></center>
							<p id="titulos">Cronograma</p>
							<p id="textos"></p>
						</td>
					</tr>
					<form method="post" action="Calendario/cronograma.html">
					
					<tr id="general" align="center">
						<td id="general">
							<input type="submit" name="" value="Consultar" id="submit">

						</td>
					</tr>
					<tr>
						<td>
							<br>
							<br>
						</td>
					</tr>
					</form>
				</table>				
			</td>

			<td id="central">	
				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<img src="imagenes/candidato.png" id="center">
						</td>
					</tr>
					<tr id="general" align="center">
						<td id="generalPadding">
							<p id="titulos">Consulta los candidatos</p>
							<p id="textos">Consulta los candidatos que se han postulado. Antes de realizar tu voto.</p>
						</td>
					</tr>
					<form method="post" action="verCandidato/candidatoprueba.php">
					<tr id="general" align="center">
						<td id="general">
							<input type="submit" name="" value="Consultar candidatos" id="submit">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<br>
						</td>
					</tr>
					</form>
				</table>

				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<br>
							<br>
							<img src="imagenes/votar.png" id="center">
						</td>
					</tr>
					<br>
					<tr id="general" align="center">
						<td id="generalPadding">
							
							<p id="textos"><b>¿Estas listo para votar?</b></p>
							<p id="textos">Ingresa tu numero de documento para completar tu formulario de votación.</p>
						</td>
					</tr>
						<form method="post" action="Formulario_Votacion/Formulario_Votacion.php">
					<tr id="general" align="center">
							<td id="general">
							<input type="number" name="documento" placeholder="Documento de Identidad" required="true" id="texto">
							</td>
					</tr>
					<tr id="general" align="center">
							<td id="general">
							<input type="submit" name="" value="Empezar a Votar" id="submit">
							</td>
					</tr>
					<tr>
							<td>
								<br>
								<br>
							</td>
					</tr>
						</form>
				</table>
			</td>
			<td id="right">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<br>
							<center><img src="imagenes/crear.png" id="crear"></center>
							<p id="titulos">Crear votación</p>
							<p id="textos">Diseña y planea una nueva votación, para la institución donde trabajas.</p>
						</td>
					</tr>
					<tr id="general" align="center">
						<td id="general">
							
						</td>
					</tr>
					<form method="post" action="Crear_Votacion/Crear_Votacion.php">
					<tr id="general" align="center">
						<td id="general">
							<input type="submit" name="" value="Crear Votación" id="submit">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<br>
						</td>
					</tr>
					</form>
				</table>
				<br>

				<table id="estiloSombra" align="center">
					<tr id="general" align="center">
						<td id="general">
							<br>
							<center><img src="imagenes/personero.png" id="crear"></center>
							<p id="titulos">Registrate como Candidato</p>
							<p id="textos">Registra tu perfil y hoja de vida para poder ser elegido en las votaciones.</p>
						</td>
					</tr>
					<tr id="general" align="center">
						<td id="general">
						</td>
					</tr>
					<form method="post" action="registrarCandidato/registrarPrueba.php">
					<tr id="general" align="center">
						<td id="general">
							<input type="submit" name="" value="Registrarse" id="submit">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<br>
						</td>
					</tr>
					</form>
				</table>
			</td>
		</tr>
	</table>
</div>

</body>
</html>

<!--

// https://www.color-hex.com/color-palette/84440
// https://www.color-hex.com/color-palette/84439

-->