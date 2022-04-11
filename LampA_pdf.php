<?php
//require LampA.php

//codes need to be alter (Backend) 

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    //page header
    function Header()
    {
        //title 
        $this->SetFont('Arial','B',15);
        $this->Cell(0,5,'LAMPIRAN A',0,0,'R');

        //form header
        $this->SetFont('Arial','',12);
        $this->Cell(-180,30,'Borang Pengesahan Akaun Bank',0,0,'C');
        
        $this->SetFont('Arial','B',12);
        $this->Cell(180,40,'Untuk Pembayaran Am',0,0,'C');

        $this->SetFont('Arial','U',12);
        $this->Cell(-180,50,'Melalui Alliance Online Banking',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->Cell(20,80,'Nama :',0,0,'R');
$box = 17;
foreach($_POST as $nama=>$value) :{//error
    $pdf->SetXY($box+=8,52);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(8,8,$nama.' '.strtoupper($value),1,0,'C'); //alter this part
    $pdf->Ln(0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(15,80,'',0,0,'L');
    $pdf->SetXY($box+=0,60);
    //$pdf->Cell(8,8,$name.' '.strtoupper($value),1,0,'C');
    $pdf->Ln(0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(25,80,'',0,0,'L');
    $pdf->SetXY($box+=0,68);
    //$pdf->Cell(8,8,$name.' '.strtoupper($value),1,0,'C');
    $pdf->Ln(6);
}
endforeach;

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(76,30,'Nombor Kad Pengenalan Baru :',0,0,'R');
    $pdf->SetXY(25,91);
   // $pdf->Cell(11.4,8,$_POST['n61'],1,0,'C');
    $pdf->Ln(6);
  
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(52,30,'Nombor Pasport :',0,0,'R');
    $pdf->SetXY(25,114);
    //$pdf->Cell(12.3,8,$_POST['n73'],1,0,'C');
    $pdf->Ln(5);

    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(58,30,'Nombor Akaun Bank :',0,0,'R');
    $pdf->SetXY(25,136);
    //$pdf->Cell(10,8,$_POST['n86'],1,0,'C');
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(41,35,'Nama Bank :',0,0,'R');
    $pdf->SetXY(25,161);
    $pdf->Cell(160,8,$_POST['nama-bank'],1,0,'L');
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(177,40,'Saya mengesahkan bahawa maklumat dan butir-butir mengenai akaun bank seperti di',0,0,'R');
    $pdf->Ln(0);
    $pdf->Cell(176,49,'atas adalah milik saya. Saya bersetuju caj perkhidmatan bank (jika ada) atas bayaran',0,0,'R');
    $pdf->Ln(0);
    $pdf->Cell(134.5,57,'yang dikredit ke akaun berkenaan didebit ke akaun yang sama.',0,0,'R');
    $pdf->Ln(0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(104,85,'Tandatangan :__________________________',0,0,'R');
    $pdf->Ln(12);
    $pdf->Cell(43,85,'Nama Penuh :',0,0,'R');
    $pdf->SetXY(53,218); 
    $pdf->Cell(60,5,$_POST['nama-penuh'],'B',1,'L');  $pdf->Cell(175,-4,'Cop Syarikat :__________________',0,0,'R');
    $pdf->Ln(12);
    $pdf->Cell(104,-3,'Tarikh            :__________________________',0,0,'R');


$pdf->Output();
?>