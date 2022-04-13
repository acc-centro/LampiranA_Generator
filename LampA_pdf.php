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
        
        //form footer
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
$box1 = 17;
$box2 = 17;
$string = $_POST['full_name'];
//$full_name = wordwrap($string, 20 ,"<br>\n");
$lines = explode("<br>\n", $string);

foreach($lines as $line) :{
 
    $letter= str_split($line);
    $pdf->SetFont('Arial','',12);

    for($index=0; $index<20; $index++) {
   
            $pdf->SetXY($box1+=8,52);
            $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C'); 
            $pdf->Ln(10);
    }
    for($index=20; $index<40; $index++){

             $pdf->SetXY($box2+=8,60);
             $pdf->SetFont('Arial','',12);
                   
             if(empty($letter[$index])){
                 $letter[$index]= trim($letter[$index],20);
                 $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C');}
            else{
             $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C');}
             $pdf->Ln(6);
    }

    for($index=40; $index<60; $index++){

              $pdf->SetXY($box+=8,68);
              $pdf->SetFont('Arial','',12);

              $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C'); 
              $pdf->Ln(10);
    }
    
} endforeach;

$pdf->Cell(76,30,'Nombor Kad Pengenalan Baru :',0,0,'R');
$box = 11.5;
$string = $_POST['ID_number'];
$id_number = wordwrap($string, 14,"<br>\n");
//echo $full_name;
//echo '<br>';
$lines = explode("<br>\n", $id_number);
//print_r($full_name);
//echo '<br>';

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);
    $pdf->SetFont('Arial','',12);
    for($index=0; $index<sizeof($split_word); $index++) {

    //$pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=13.3,95);
    $pdf->Cell(13.3,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;

$pdf->SetFont('Arial','B',12);
$pdf->Cell(52,30,'Nombor Pasport :',0,0,'R');
$box = 13;
$string = $_POST['pasport_number'];
$pasport_number = wordwrap($string, 13,"<br>\n");
$lines = explode("<br>\n", $pasport_number);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
  
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=12.3,122);
    $pdf->Cell(12.3,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;

$pdf->SetFont('Arial','',12);
$pdf->Cell(57.5,30,'Nombor Akaun Bank :',0,0,'R');
$box = 15 ;
$string = $_POST['acc_number'];
$acc_number = wordwrap($string, 16,"<br>\n");
$lines = explode("<br>\n", $acc_number);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
    
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=10,149);
    $pdf->Cell(10,8,$split_word[$index],1,0,'C');
    $pdf->Ln(10);

    }

} endforeach;
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(41,35,'Nama Bank :',0,0,'R');
    $pdf->SetXY(25,179);
    $pdf->Cell(160,8,$_POST['nama-bank'],1,0,'L');
    $pdf->Ln(5);

$pdf->Output();
?>