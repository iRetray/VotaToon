<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=sistema;host=127.0.0.1","root","12345678");



$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
switch ($accion) {
	case 'agregar':
		//Instrucción de agregar
		$sentenciaSQL = $pdo->prepare("INSERT INTO eventos(title,descripcion,start,endi,color,textColor) VALUES(:title,:descripcion,:start,:endi,:color,:textColor)");

		$respuesta=$sentenciaSQL->execute(array(
			"title"=>"t",
			"descripcion"=>"d",
			"start"=>'2019-11-24 10:30:00',
			"endi"=>'2019-11-24 10:30:00',
			"color"=>'#FF0000',
			"textColor"=>'#FFFFFF'
		));



		break;
	case 'eliminar':
		//Instrucción de eliminar
		echo "Instrucción eliminar";
		break;
	case 'modificar':
		//Instrucción de modificar
		echo "Instrucción modificar";		
		break;
	default:
		
		//Selecciona los eventos del calendario
		$sentenciaSQL=$pdo->prepare("SELECT * FROM eventos");
		$sentenciaSQL->execute();

		$resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultado);
		break;
}




?>