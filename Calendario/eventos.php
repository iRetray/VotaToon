<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=sistema;host=127.0.0.1","root","12345678");



$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
switch ($accion) {


	case 'agregar':
		//Instrucción de agregar
		$sentenciaSQL = $pdo->prepare("INSERT INTO eventos(title,descripcion,start,endi,color,textColor) VALUES(:title,:descripcion,:start,:endi,:color,:textColor)");

		$respuesta=$sentenciaSQL->execute(array(
			"title"=> $_POST['title'],
			"descripcion"=>$_POST['descripcion'],
			"start"=>$_POST['start'],
			"endi"=>$_POST['endi'],
			"color"=>$_POST['color'],
			"textColor"=>$_POST['textColor']
		));
		echo json_encode($respuesta);

		break;


	case 'eliminar':
		//Instrucción de eliminar
		//echo "Instrucción eliminar";
		$respuesta=false;

		if(isset($_POST['id'])){

			$sentenciaSQL= $pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
			$respuesta= $sentenciaSQL->execute(array("ID"=>$_POST['id']));

		}
		echo json_encode($respuesta);


		break;

	case 'modificar':
		//Instrucción de modificar
		$sentenciaSQL= $pdo->prepare("UPDATE eventos SET 
			title=:title,
			descripcion=:descripcion,
			start=:start,
			endi=:endi,
			color=:color,
			textColor=:textColor			
			WHERE ID=:ID");

		$respuesta=$sentenciaSQL->execute(array(
			"ID"=>$_POST['id'],
			"title"=> $_POST['title'],
			"descripcion"=>$_POST['descripcion'],
			"start"=>$_POST['start'],
			"endi"=>$_POST['endi'],
			"color"=>$_POST['color'],
			"textColor"=>$_POST['textColor']
		));
		echo json_encode($respuesta);


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