<?php

include_once('../../config/init.php');
include_once('../../lib/fpdf/fpdf.php');
include_once('../../database/equipa_confirmacao.php');

$confirmacoes = getConfirmacoesMesAno($_GET['year'],$_GET['month']);



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();


header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="myPDF.pdf');

// Send Headers: Prevent Caching of File
header('Cache-Control: private');
header('Pragma: private');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');


?>