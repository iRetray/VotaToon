<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('insertarImgen.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(90,10,'RESULTADOS VOTACIONES 2019',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C');
}
}


require 'conex.php';
$consulta = "SELECT * FROM votos";
$resultado = myqli->query($consulta);



$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,utf8_decode('¡Ganador!'));

while ($row = $resultado->fecth_assoc()) {
	$pdf->Cell(90, 10, $row['id'],1,0,'C',0);
}



$pdf->Output();
?>

