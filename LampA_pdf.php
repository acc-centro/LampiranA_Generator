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

    function footer()
    {
        
        //footer declaration
        $this->SetFont('Arial','',12);
        $this->Cell(177,40,'Saya mengesahkan bahawa maklumat dan butir-butir mengenai akaun bank seperti di',0,0,'R');
        $this->Ln(0);
        $this->Cell(176,49,'atas adalah milik saya. Saya bersetuju caj perkhidmatan bank (jika ada) atas bayaran',0,0,'R');
        $this->Ln(0);
        $this->Cell(134.5,57,'yang dikredit ke akaun berkenaan didebit ke akaun yang sama.',0,0,'R');
        $this->Ln(0);
        
        //footer form
        $this->SetFont('Arial','',12);
        $this->Cell(104,85,'Tandatangan :__________________________',0,0,'R');
        $this->Ln(12);
        $this->Cell(104,85,'Nama Penuh :__________________________',0,0,'R');  $this->Cell(175,85,'Cop Syarikat :__________________',0,0,'L');
        $this->Ln(12);
        $this->Cell(104,85,'Tarikh            :__________________________',0,0,'R');

    }
}

$pdf = new PDF();
$pdf->AddPage();

//echo '<pre>';
$pdf->Cell(20,80,'Nama :',0,0,'R');
$box = 17;
$string = $_POST['full_name'];
$full_name = wordwrap($string, 20,"<br>\n",TRUE);
//echo $full_name;
//echo '<br>';
$lines = explode("<br>\n", $full_name);
//print_r($full_name);
//echo '<br>';

foreach($lines as $line) :{
 
    $split_word= str_split($line);
   // $pdf->Ln(0);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {

    $pdf->SetXY($box+=8,52);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(8,8,strtoupper($split_word[$index]),1,0,'C'); 
    $pdf->Ln(10);

    //$pdf->SetFont('Arial','',12);
    //$pdf->Cell(15,80,'',0,0,'L');
    //$pdf->SetXY($box+=0,60);
    //$pdf->Cell(8,8,$name.' '.strtoupper($value),1,0,'C');
    //$pdf->Ln(0);

   // $pdf->SetFont('Arial','',12);
   // $pdf->Cell(25,80,'',0,0,'L');
   // $pdf->SetXY($box+=0,68);
    //$pdf->Cell(8,8,$name.' '.strtoupper($value),1,0,'C');
    //$pdf->Ln(6);

    } 
    
}
endforeach;

$pdf->Cell(76,30,'Nombor Kad Pengenalan Baru :',0,0,'R');
$box = 17;
$string = $_POST['ID_number'];
$id_number = wordwrap($string, 14,"<br>\n",TRUE);
//echo $full_name;
//echo '<br>';
$lines = explode("<br>\n", $id_number);
//print_r($full_name);
//echo '<br>';

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {

    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=8,79);
    $pdf->Cell(8,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;

$pdf->Cell(49.5,30,'Nombor Pasport :',0,0,'R');
$box = 17;
$string = $_POST['pasport_number'];
$pasport_number = wordwrap($string, 13,"<br>\n",TRUE);
$lines = explode("<br>\n", $pasport_number);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
  
   // $pdf->SetFont('Arial','B',12);
    $pdf->SetXY($box+=8,106);
    $pdf->Cell(8,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;

$pdf->Cell(57.5,30,'Nombor Akaun Bank :',0,0,'R');
$box = 17;
$string = $_POST['acc_number'];
$acc_number = wordwrap($string, 16,"<br>\n",TRUE);
$lines = explode("<br>\n", $acc_number);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
    
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=8,133);
    $pdf->Cell(8,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(41,35,'Nama Bank :',0,0,'R');
    $pdf->SetXY(25,163);
    $pdf->Cell(160,8,$_POST['nama-bank'],1,0,'L');
    $pdf->Ln(5);

$pdf->Output();
?>