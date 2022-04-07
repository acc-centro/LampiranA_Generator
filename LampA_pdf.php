<?php
//require LampA.php

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

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,80,'Nama :',0,0,'R');
    $pdf->SetXY(25,52);
    $pdf->Cell(8,8,strtoupper($_POST['n1']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n2']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n3']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n4']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n5']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n6']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n7']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n8']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n9']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n10']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n11']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n12']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n13']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n14']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n15']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n16']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n17']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n18']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n19']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n20']),1,0,'C');
    $pdf->Ln(0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(15,80,'',0,0,'L');
    $pdf->SetXY(25,60);
    $pdf->Cell(8,8,strtoupper($_POST['n21']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n22']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n23']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n24']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n25']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n26']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n27']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n28']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n29']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n30']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n31']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n32']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n33']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n34']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n35']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n36']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n37']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n38']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n39']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n40']),1,0,'C');
    $pdf->Ln(0);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(25,80,'',0,0,'L');
    $pdf->SetXY(25,68);
    $pdf->Cell(8,8,strtoupper($_POST['n41']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n42']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n43']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n44']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n45']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n46']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n47']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n48']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n49']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n50']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n51']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n52']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n53']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n54']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n55']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n56']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n57']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n58']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n59']),1,0,'C');
    $pdf->Cell(8,8,strtoupper($_POST['n60']),1,0,'C');
    $pdf->Ln(6);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(76,30,'Nombor Kad Pengenalan Baru :',0,0,'R');
    $pdf->SetXY(25,91);
    $pdf->Cell(11.4,8,$_POST['n61'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n62'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n63'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n64'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n65'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n66'],1,0,'C');
    $pdf->Cell(11.4,8,' - ',1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n67'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n68'],1,0,'C');
    $pdf->Cell(11.4,8,' - ',1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n69'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n70'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n71'],1,0,'C');
    $pdf->Cell(11.4,8,$_POST['n72'],1,0,'C');
    $pdf->Ln(6);

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(52,30,'Nombor Pasport :',0,0,'R');
    $pdf->SetXY(25,114);
    $pdf->Cell(12.3,8,$_POST['n73'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n74'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n75'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n76'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n77'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n78'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n79'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n80'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n81'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n82'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n83'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n84'],1,0,'C');
    $pdf->Cell(12.3,8,$_POST['n85'],1,0,'C');
    $pdf->Ln(5);

    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(58,30,'Nombor Akaun Bank :',0,0,'R');
    $pdf->SetXY(25,136);
    $pdf->Cell(10,8,$_POST['n86'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n87'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n88'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n89'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n90'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n91'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n92'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n93'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n94'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n95'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n96'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n97'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n98'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n99'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n100'],1,0,'C');
    $pdf->Cell(10,8,$_POST['n101'],1,0,'C');
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