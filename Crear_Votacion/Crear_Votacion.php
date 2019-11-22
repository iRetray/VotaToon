<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Crear Votación</title>
	<link rel="stylesheet" type="text/css" href="../estilos.css">
</head>
<body class="bodyStyle">
<div align="center">
<img src="../imagenes/headerLastR.png" id="header" align="center">
</div>
<div>
	<table id="estiloSombra" align="center">
		<tr id="general" align="center">
			<td id="left">
				
			</td>
			<td>
				<p id="titulos">Aqui podrá crear la votación</p>
			</td>
			<td id="right">
				
			</td>
		</tr>
	</table>
	<table id="estiloSombratransparente">
		
		<tr id="general">
			<td id="left1-1">
				
			</td>
			<td id="central1-3" align="center">
				<p align="center" id="textos">Votación</p>

	<br>				
				<select name="colegio" class="cajasregistropersonero" form="formulariocrearvotacion">
					<option value="Colegio 1" class="cajasregistropersonero">Colegio 1</option>
					<option value="Colegio 2" class="cajasregistropersonero">Colegio 2</option>
				</select>
				<input type="text" name="NNNN" id="NNNN" placeholder="VALIDAR SI ES NECESARIO" class="cajasregistropersonero" required="true"><!-- Validar si es necesario -->
				<form action="/action_page.php" id="formulariocrearvotacion">
	  				<input type="submit" name="" value="Crear Votación" id="submit">
				</form>
			</td>
			<td id="right1-4">
				
			</td>
		</tr>
	</table>
</div>

</body>
</html>
