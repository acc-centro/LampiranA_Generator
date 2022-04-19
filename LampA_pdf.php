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

//--------------------------------------Nama----------------------------------//
$pdf->Cell(20,80,'Nama :',0,0,'R');
$box = 17;
$box1 = 17;
$box2 = 17;
$string = $_POST['full_name'];
$lines = explode("\n", $string);

foreach($lines as $line) :{
 
    $letter= str_split($line);
    $pdf->SetFont('Arial','',12);

    for($index=0; $index<20; $index++) {

    $pdf->SetXY($box1+=8,52);
    $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C'); 
    $pdf->Ln(5);

    }
    for($index=20; $index<40; $index++){

    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box2+=8,60);

    if(ctype_space($letter[$index])){                   //check for spacing in the string

        //echo 'This is a space, please delete this';
        //$letter[$index]=ltrim($letter[$index]);       
        //$letter[$index]=array_shift($letter);           //push array, take first value and replace. (belum jadi)

    }

    //$oristring = $letter[$index];
    //$letter[$index]= str_pad($oristring, 60);         //fill the rest of empty placeholders with " "
    $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C'); 
    //print_r($letter[$index]);

    $pdf->Ln(6); 

    }

    for($index=40; $index<60; $index++){

    $pdf->SetXY($box+=8,68);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(8,8,strtoupper($letter[$index]),1,0,'C'); 
    $pdf->Ln(5);
    }
    
} endforeach;

//--------------------------------------Nombor kp-----------------------------------//

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
    $pdf->SetXY($box+=13.3,90);
    $pdf->Cell(13.3,8,$split_word[$index],1,0,'C');
    $pdf->Ln(5);

    }

} endforeach;

//--------------------------------------Nombor passport -----------------------------//

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
    $pdf->SetXY($box+=12.3,112);
    $pdf->Cell(12.3,8,$split_word[$index],1,0,'C');
    $pdf->Ln(5);

    }

} endforeach;

//--------------------------------------Nombor Akaun Bank --------------------------------//
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
    $pdf->SetXY($box+=10,134);
    $pdf->Cell(10,8,$split_word[$index],1,0,'C');
    $pdf->Ln(5);

    }

} endforeach;
    
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(41,35,'Nama Bank :',0,0,'R');
    $pdf->SetXY(25,158.5);
    $pdf->Cell(160,8,$_POST['nama-bank'],1,0,'L');
    $pdf->Ln(5);

//--------------------------------------Nombor telefon-----------------------------//

$pdf->SetFont('Arial','',12);
$pdf->Cell(49.5,30,'Nombor Telefon :',0,0,'R');
$box = 9.5;
$string = $_POST['phone_num'];
$phone_num = wordwrap($string, 11,"<br>\n");
$lines = explode("<br>\n", $phone_num);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
  
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=16,180.5);
    $pdf->Cell(16,8,$split_word[$index],1,0,'C');
    $pdf->Ln(5);

    }

} endforeach;

//--------------------------------------Emel-----------------------------//

$pdf->SetFont('Arial','',12);
$pdf->Cell(29,30,'Emel :',0,0,'R');
$box =17;
$string = $_POST['user_email'];
$email = wordwrap($string,30,"<br>\n");
$lines = explode("<br>\n", $email);

foreach($lines as $line): {

    $split_word= str_split($line);
    //print_r($split_word);

    for($index=0; $index<sizeof($split_word); $index++) {
  
    $pdf->SetFont('Arial','',12);
    $pdf->SetXY($box+=8,202.5);                             //max 30 char
    $pdf->Cell(8,8,$split_word[$index],1,0,'C');
    $pdf->Ln(5);

    }

} endforeach;


$pdf->Output();
?>