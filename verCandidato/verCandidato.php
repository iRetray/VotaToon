<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
require("../conexion.php");
mysql_select_db('votaciones');
$query = 'SELECT nombre1, coreo1 FROM candidatos';

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>nombre1</th>
			<th>correo1</th>
			<th>APELLIDO</th>
			<th>TELEFONO</th>
			<th>ESTADIA</th>
			<th>HABITACION</th>
		</tr>
		</thead>
<?php while ($row = mysql_fetch_array($result)){?>
	<td><?php $row['nombre1'] ?></td>
    <td><?php $row['correo1'] ?></td> 
    
	
<?php} ?>
</table>
</body>
</html>