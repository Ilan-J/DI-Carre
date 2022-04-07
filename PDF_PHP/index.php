<?php
require('fpdf.php');

class PDF extends FPDF
{
// En-tête
function Header()
{
// Logo
$this->Image('../images/Logo.png',95,5,30);
// Saut de ligne
$this->Ln(27);
}

// Pied de page
function Footer()
{
// Positionnement à 1,5 cm du bas
$this->SetY(-15);
// Police Arial italique 10
$this->SetFont('Times','I',10);
// Numéro de page
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation du PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Bloc 1
$pdf->SetFont('Times','',16);
$pdf->SetFillColor(32,32,32);
$pdf->SetTextColor(255,255,255);
$txt1 = "Prospectus publicitaire du site DI²";
$txt1 = utf8_decode($txt1);
$pdf->Multicell(190,10,$txt1,0,'C', TRUE);

// Saut de lignes
$pdf->Ln(5);
// Bloc 1
$pdf->SetFont('Times','',14);
$pdf->SetFillColor(0,151,167);
$pdf->SetTextColor(255,255,255);
$txt1 = "Prochainement disponible en ligne ";
$txt1 = utf8_decode($txt1);
$pdf->Multicell(190,10,$txt1,0,'L', TRUE);

// Saut de lignes
$pdf->Ln(134);
$pdf->Image('../images/main-image-game.jpg',12,67,186);
// Bloc 2
$pdf->SetFont('Arial','',14);
$pdf->SetFillColor(32,32,32);
$pdf->SetTextColor(255,255,255);
$txt2 = "QRCode git des collaborateurs :";
$txt2 = utf8_decode($txt2);
$pdf->Multicell(190,10,$txt2,0,'R', TRUE);

// Saut de lignes
$pdf->Ln(10);



$pdf->Image('qrcodeIlanJ.png',10,209,50);
$pdf->Image('qrcodeDavid.png',80,209,50);
$pdf->Image('qrcodeIlanL.png',150,209,50);
// Saut de ligne
$pdf->Ln(50);

// Bloc avant 2
$pdf->SetFont('Arial','',14);
$pdf->SetFillColor(0,151,167);
$pdf->SetTextColor(255,255,255);
$txt2 = "   Ilan Jaglin                                    David Lansonneur                                Ilan Loore    ";
$txt2 = utf8_decode($txt2);
$pdf->Multicell(190,10,$txt2,0,'R', TRUE);

// Saut de lignes
$pdf->Ln(10);


// Création du PDF
$fichier ="fichier.pdf";
$pdf->Output($fichier,'F');

// Redirection vers le PDF
header('location: fichier.pdf');
?>