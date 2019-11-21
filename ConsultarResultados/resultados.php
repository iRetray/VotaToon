<?php
require('../ConsultarResultados/fpdf/fpdf.php');
class PDF extends FPDF
{
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
    $this->Cell(50,10,'RESULTADOS',0,0,'C');
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
require '../ConsultarResultados/cn.php';

$consulta = "SELECT * FROM resultados";
$resultado = $mysqli->query($consulta);




$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(70, 10, $row['nombre1'], 1, 0, 'C',0);
    $pdf->Cell(70, 10, $row['nombre2'], 1, 0, 'C',0);
    $pdf->Cell(50, 10, $row['resultados'], 1, 1, 'C',0);
}



$pdf->Output();
?>

