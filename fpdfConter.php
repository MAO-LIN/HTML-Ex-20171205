<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/3
 * Time: 上午 10:55
 */
require('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();