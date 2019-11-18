<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>VotaToon</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">

	<script src="https://cdn.tiny.cloud/1/ev5dle7dvy3qi2izevr0yx74zquka4a45nggtb1nbz2peiej/tinymce/5/tinymce.min.js"></script> 
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body class="bodyStyle">
	<center>
	<table id="estiloSombraFormulario" align="center">
		<tr id="general" align="center">
			<td id="error">
				<img src="../imagenes/inscripciones.png" id="hins">
				<p id="textos">Bienvenidos al <strong>formulario de inscripciones</strong> para candidatos.<br><br>Para poder <strong>ser elegidos</strong> el dia de las elecciones, deben <strong>registrar sus perfiles correspondientes</strong> <i>(niño y niña)</i>. <br><br>Recuerda completar <strong>todos los datos</strong>, incluyendo <strong>nombre, correo, descripción personal, foto y plan de gobierno en formato PDF.</strong></p>
			</td>
		</tr>
		<form method="post" action="" id="formNiño">
		<tr id="general" align="center" bgcolor="#b2b2ff">
			<td id="error">
				<p id="textos">Datos del Niño candidato</p>				
				<input type="text" name="nombre1" id="texto" placeholder="Nombre Completo">
				<input type="email" name="correo1" id="texto" placeholder="Correo electronico">
				<br>
				<br>
				<textarea name="descripcion1" form="formNiño">Descripcion del candidato</textarea>
				<br>
				<p id="textos">Foto del candidato</p>	
				<input type="file" accept="image/*" name="foto1" id="texto" placeholder="Foto del candidato">
			</td>
		</tr>
		<tr id="general" align="center" bgcolor="#FFC0CB">
			<td id="error">
				<p id="textos">Datos de la Niña candidata</p>				
				<input type="text" name="nombre2" id="texto" placeholder="Nombre Completo">
				<input type="email" name="correo2" id="texto" placeholder="Correo electronico">
				<br>
				<br>
				<textarea name="descripcion2" form="formNiño">Descripcion de la candidata</textarea>
				<br>
				<p id="textos">Foto de la candidata</p>	
				<input type="file" accept="image/*" name="foto2" id="texto" placeholder="Foto del candidato">
				
			</td>
		</tr>
		<tr bgcolor="#b2b2b2">
			<td id="error">
				<center>
					<p id="textos">Plan de Gobierno</p>
				<input type="file" accept="application/pdf, application/msword" name="plan" id="texto"></center>
			</td>
		</tr>
		<tr align="center">
			<td id="error">
				<center><input type="submit" name="" id="submit" value="Completar Registro"></center>
				<p id="textos" align="center"><br><a href="../index.html">Volver al inicio</a></p>
			</td>
		</tr>	
		</form>
	</table>
	</center>
</body>
</html>