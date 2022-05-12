<?php
//require LampA.php
//codes need to be alter (Backend) 

// catch raw bank, explode by |
$bank = explode('|', $_POST['bank']);
$nama_bank = $bank[0];
$kod_bank = $bank[1];
$length_required = $bank[2];



// TODO: create validation
/*
 fullname * alphabet only (done in LampA.php)
 mykad, passport * numeric only (done in LampA.php)
 no akaun bank * validate length submitted with $length_required
 phone * numeric only, maxlength 11 (done in LampA.php)
 email * validate emel format xxx@yyy.zzz(done in LampA.php)
 */ 

// if validation passed, proceed below...

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
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 80, 'Nama :', 0, 0, 'R');
$box = 17; // preset left margin
$full_name = wordwrap(strtoupper(trim($_POST['full_name'])), 20, "\n");
$lines = explode("\n", $full_name); // max 3 lines only (index 0,1,2)

$pdf->SetFont('Arial', '', 12);
// line 1
$data1 = str_split($lines[0]);
for($i=0; $i<20; $i++) {
    $letter = isset($data1[$i]) ? $data1[$i] : '';
    $pdf->SetXY($box+=8, 52);
    $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
    $pdf->Ln(5);
}

// line 2
if (isset($lines[1])) { // not empty   
    $box = 17; // reset left margin
    $data2 = str_split($lines[1]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data2[$i]) ? $data2[$i] : '';
        $pdf->SetXY($box+=8, 60);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 60);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

// line 3
if (isset($lines[2])) { // not empty   
    $box = 17; // reset left margin
    $data3 = str_split($lines[2]);
    for($i=0; $i<20; $i++) {
        $letter = isset($data3[$i]) ? $data3[$i] : '';
        $pdf->SetXY($box+=8, 68);
        $pdf->Cell(8, 8, $letter, 1, 0, 'C'); 
        $pdf->Ln(6);
    }
} else { // render blank box
    $box = 17; // reset left margin
    for($i=0; $i<20; $i++) {
        $pdf->SetXY($box+=8, 68);
        $pdf->Cell(8, 8, '', 1, 0, 'C'); 
        $pdf->Ln(6);
    }
}

//--------------------------------------Nombor kp-----------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(79.5, 32, 'Nombor Kad Pengenalan Baru :', 0, 0, 'R');
$box = 11.5;
$mykad = str_split(trim($_POST['mykad']));
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<12; $i++) {
    $digit = isset($mykad[$i]) ? $mykad[$i] : '';
    $pdf->SetXY($box+=13.3, 92);
    $pdf->Cell(13.3, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

//--------------------------------------Nombor passport -----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(51.5, 30, 'Nombor Pasport :', 0, 0, 'R');
$box = 11.5;
$passport = str_split(trim($_POST['passport_number']));
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<12; $i++) {
    $digit = isset($passport[$i]) ? $passport[$i] : '';
    $pdf->SetXY($box+=13.3, 114);
    $pdf->Cell(13.3, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

//--------------------------------------Nombor Akaun Bank --------------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60.5, 26, 'Nombor Akaun Bank :', 0, 0, 'R');
$box = 15 ;
$acc = str_split($_POST['acc_number']);
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<16; $i++) {
    $digit = isset($acc[$i]) ? $acc[$i] : '';
    $pdf->SetXY($box+=10, 134);
    $pdf->Cell(10, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(41.5, 35, 'Nama Bank :', 0, 0, 'R');
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(25, 158.5);
$pdf->Cell(160, 8, $nama_bank.' ('.$kod_bank.')', 1, 0, 'L');
$pdf->Ln(5);

//--------------------------------------Nombor telefon-----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(51, 30, 'Nombor Telefon :', 0, 0, 'R');
$box = 10.5;
$phone = str_split($_POST['phone_num']);
$pdf->SetFont('Arial', '', 12);
for($i=0; $i<11; $i++) { // no.hp maxlength = 11 (xxx-xxxxxxxx)
    $digit = isset($phone[$i]) ? $phone[$i] : '';
    $pdf->SetXY($box+=14.6, 180.5);
    $pdf->Cell(14.6, 8, $digit, 1, 0, 'C');
    $pdf->Ln(5);
}

//--------------------------------------Emel-----------------------------//
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(29, 30, 'Emel :', 0, 0, 'R');
$pdf->SetXY(25.5, 202.5);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(160, 8, $_POST['user_email'], 1, 0, 'L');
$pdf->Ln(5);

$pdf->Output();
?>