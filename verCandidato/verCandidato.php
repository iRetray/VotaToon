<?php
require("../conexion.php");

$consulta = "SELECT * FROM candidatos WHERE 1";
$sql = mysqli_query($conexion, $consulta);
?>
<html>
<head>
<title>Vista de Candidatos</title>
</head>
<body>

<table>
<?
  while($rs=mysqli_fetch_array($sql))
  {
    echo "<tr>"
           ."<td>".$rs['nombre1']."</td>"
           ."<td>".$rs['correo1']."</td>"
           ."<td>".$rs['desarrollo']."</td>"
           ."<td>".$rs['tlf']."</td>"
           ."<td>".$rs['email']."</td>"
           ."</tr>";
  }
?>
</table>

</body> 