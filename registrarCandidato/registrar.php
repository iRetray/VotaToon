<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>VotaToon</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">
</head>
<body class="bodyStyle">
	<center>
	<table id="estiloSombra" align="center">
		<tr id="general" align="center">
			<td id="error">
				<p id="titulos">Formulario de Inscripcion</p>
				<img src="../imagenes/perfil.png" id="header">
				<p id="textos">Como candidatos, deben registrar sus perfiles correspondientes (niño y niña) para que puedan ser elegidos el dia de las votaciones. Completa todos los campos a continuacion:</p>
			</td>
		</tr>
		<form method="post" action="">
		<tr id="general" align="center">
			<td id="error">
				<p id="textos">Datos del Niño candidato</p>				
				<input type="text" name="nombre1" id="texto" placeholder="Nombre Completo">
				<input type="email" name="correo1" id="texto" placeholder="Correo electronico">
				<input type="text" name="descripcion1" id="texto" placeholder="Descripcion del candidato">
				<p id="textos">Foto:</p>	
				<input type="file" accept="image/*" name="foto1" id="texto" placeholder="Foto del candidato">
			</td>
		</tr>
		<tr id="general" align="center">
			<td id="error">
				<p id="textos">Datos de la Niña candidata</p>				
				<input type="text" name="nombre2" id="texto" placeholder="Nombre Completo">
				<input type="email" name="correo2" id="texto" placeholder="Correo electronico">
				<input type="text" name="descripcion2" id="texto" placeholder="Descripcion del candidato">
				<p id="textos">Foto:</p>	
				<input type="file" accept="image/*" name="foto2" id="texto" placeholder="Foto del candidato">
				<input type="submit" name="" id="submit" value="Completar Registro">
			</td>
		</tr>
		</form>
		<tr>
			<td id="error">
				<p id="textos" align="center"><br><a href="../index.html">Volver al inicio</a></p>
			</td>
		</tr>	
	</table>
	</center>
</body>
</html>