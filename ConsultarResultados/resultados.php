<?php
require('../ConsultarResultados/lib/fpdf/fpdf.php');
require('../ConsultarResultados/lib/jpgraph/src/jpgraph.php');
require('../ConsultarResultados/lib/jpgraph/src/jpgraph_pie.php');
require ('../ConsultarResultados/lib/jpgraph/src/jpgraph_pie3d.php');
class PDF extends FPDF
{

    public function __construct($orientation='P', $unit='mm', $format='A4')
    {
        parent::__construct($orientation, $unit, $format);
    }


    public function gaficoPDF($datos = array(),$nombreGrafico = NULL, $ubicacionTamamo = array(),$titulo = NULL)
    { 
  //construccion de los arrays de los ejes x e y
      if(!is_array($datos) || !is_array($ubicacionTamamo)){
         echo "los datos del grafico y la ubicacion deben de ser arreglos";
     }
     elseif($nombreGrafico == NULL){
         echo "debe indicar el nombre del grafico a crear";
     }
     else{ 
   #obtenemos los datos del grafico  
         foreach ($datos as $key => $value){
            $data[] = $value[0];
            $nombres[] = $key; 
            $color[] = $value[1];
        } 
        $x = $ubicacionTamamo[0];
        $y = $ubicacionTamamo[1]; 
        $ancho = $ubicacionTamamo[2];  
        $altura = $ubicacionTamamo[3];  
   #Creamos un grafico vacio
        $graph = new PieGraph(600,400);
   #indicamos titulo del grafico si lo indicamos como parametro
        if(!empty($titulo)){
            $graph->title->Set($titulo);
        }   
   //Creamos el plot de tipo tarta
        $p1 = new PiePlot3D($data);
        $p1->SetSliceColors($color);
   #indicamos la leyenda para cada porcion de la tarta
        $p1->SetLegends($nombres);
   //Añadirmos el plot al grafico
        $graph->Add($p1);
   //mostramos el grafico en pantalla
        $graph->Stroke("$nombreGrafico.png"); 
        $this->Image("$nombreGrafico.png",$x,$y,$ancho,$altura);  
    } 
}



    // Cabecera de página
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(70);
        // Título
        $this->Cell(50,10,'RESULTADOS TOTALES:',0,0,'C');
        // Salto de línea
        $this->Ln(20);
        
        $this->Cell(70, 10, 'Nombre del Candidato', 1, 0, 'C',0);
        $this->Cell(70, 10, 'Nombre del Candidato', 1, 0, 'C',0);
        $this->Cell(50, 10, utf8_decode('Número de votos'), 1, 1, 'C',0);


    }
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}






$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

require '../ConsultarResultados/cn.php';

$consulta = "SELECT * FROM resultados";
$resultado = $mysqli->query($consulta);

$maxVotos = 0;
$n1='';
$n2='';

while($row = $resultado->fetch_assoc()){

    $pdf->Cell(70, 10, $row['nombre1'], 1, 0, 'C',0);
    $pdf->Cell(70, 10, $row['nombre2'], 1, 0, 'C',0);
    $pdf->Cell(50, 10, $row['resultados'], 1, 1, 'C',0);


    if ($row['resultados'] > $maxVotos) {
        $maxVotos = $row['resultados'];
        $n1 = $row['nombre1'];
        $n2 = $row['nombre2'];
    }

}

$consulta2 = "SELECT * FROM candidatos";
$resultado2 = $mysqli->query($consulta2);

$pdf->Ln(120);
$pdf->Cell(0, 10, "GANADORES DE LAS ELECCIONES: ", 0, 1, 'C',0);
$pdf->Ln(10);



while ($row = $resultado2->fetch_assoc()) {

    if ($row['nombre1'] == $n1) {
        $pdf->Cell(70, 10, $n1, 0, 0, 'C',0);
        $pdf->Cell(70, 10, $n2, 0, 0, 'C',0);
        $pdf->Cell(50, 10, $maxVotos, 0, 1, 'C',0);
    }    
}


$pdf->gaficoPDF(array('Candidatos 1'=>array(200),'Candidatos 2'=>array(345), 'Candidatos 3'=>array(273)), 'Grafico', array(40,80,130,100),'PORCENTAJE VOTOS');


$pdf->Output();
?>