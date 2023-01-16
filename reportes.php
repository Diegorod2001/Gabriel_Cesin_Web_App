<?php
require("pdf/fpdf.php");

class PDF extends FPDF{

    function header(){

        $this->Cell(-200);
        $this->image("img/cris.jpg",0,-10,220);
        
        $this->Ln(10);
        $this->SetFont("Arial","B",12);

        $this->Cell(-200);

    }
    function Footer(){
        $this->SetFillColor(20,05,19);
        $this->Rect(0,270,220,30,'F');
        $this->SetY(-20);
        $this->SetFont('Arial','',10);
        $this->SetTextcolor(255,255,255);
        $this->SetX(90);
        $this->Write(5, '  Crismar C.A tus compras online');
        $this->Ln();
    }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();
$pdf->SetFont('Arial','',10);

$pdf->SetY(70);
$pdf->SetX(45);
$pdf->SetTextColor(225,225,225);
$pdf->SetFillColor(79,59,120);
$pdf->Cell(59,9,'codigo',0 , 0, 'C',1);
$pdf->Cell(17,9, 'producto',0 ,0, 'C',1);
$pdf->Cell(50,9, 'inventario_inicial',0 ,1, 'C',1);
$pdf->Cell(50,9, 'entradas',0 ,1, 'C',1);
$pdf->Cell(50,9, 'salidas',0 ,1, 'C',1);
$pdf->Cell(50,9, 'disponilbes',0 ,1, 'C',1);

include("conexion.php");
$con=conectar();


$sql= "SELECT * FROM lista_inventario";
$query=mysqli_query($con,$sql);

$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(240,245,255);

while($row = $query->fetch_assoc()){
    $pdf->SetX(45);
    $pdf->Cell(59,9, $row['codigo'],0,0,'C',1);
    $pdf->Cell(17,9, $row['producto'],0,0,'C',1);
    $pdf->Cell(50,9, $row['inventario_inicial'],0,1,'C',1);
    $pdf->Cell(50,9, $row['entradas'],0,1,'C',1);
    $pdf->Cell(50,9, $row['salidas'],0,1,'C',1);
    $pdf->Cell(50,9, $row['disponibles'],0,1,'C',1);


}
$pdf->Output();


?>