<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAMPIRAN A GENERATOR</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <script src="http://code.jquery.com/jquery-plugins.js"></script>
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"> </script> 

</head>
<style>
    @import url('https://rsms.me/inter/inter.css');
    html { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
    html { font-family: 'Inter var', sans-serif; }

    body {
		padding: 10px;
	}
}

.text-line {
    background-color: transparent;
    width: 51%;
    color: #000000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #000000 1px;
    text-decoration: none;
    padding: 3px 5px;
}
  .text-line1 {
    background-color: transparent;
    width: 31%;
    color: #000000;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid #000000 1px;
    text-decoration: none;
    padding: 3px 5px;
}
</style>

<script>
  $('input.form-control.text-center.mobile-verify.pass').on('keyup', function() {
    if ($(this).val()) {
        $(this).next().focus();
    }
});
</script>

<body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Page Header -->

<header>
  <div class="p-5 text-center" >
    <h2 class="mb-1" style="font-size:20px">Borang Pengesahan Akaun Bank</h2>
    <h1 class="mb-1" style="font-size:20px">
      <b>Untuk Pembayaran Am</b>
    </h1>
    <h3 class="mb-3" style="font-size:20px">
      <u>Melalui Alliance Online Banking</u>
    </h3>
  </div>
</header>

<div class="container">
<form action="LampA_pdf.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" style="text-transform: uppercase;" class="form-control text-left" maxlength="60" name="full_name">
        <div class="input-group mb-0">
          <p>(Ejaan nama seperti pada kad pengenalan. Gelaran pada hadapan nama seperti Datuk, Mr., Encik, Haji, Cik dsb tidak dibenarkan)</p>
        </div>      
      <br>

      <label for="nom_kp">Nombor Kad Pengenalan Baru :</label>
      <input type="number" class="form-control text-left" oninput="if((this.value.length) > 12) { this.value = this.value.substring(0, 12); }" name="ID_number">

      <br>
      <br>

      <label for="nom_pas"><b>Nombor Pasport :</b></label>
      <input type="number"  class="form-control text-left"  oninput="if((this.value.length) > 13) { this.value = this.value.substring(0, 13); }" name="pasport_number">
      <br>
      <br>

      <label for="nom_ab">Nombor Akaun Bank :</label>
      <input type="number" class="form-control text-left" oninput="if((this.value.length) > 16) { this.value = this.value.substring(0, 16); }" name="acc_number">

      <p>(Nombor Akaun mestilah berturutan tanpa sengkang [space])</p>
      <br>

      <?php 
      /* use curl and decode json to receive all banks; use foreach looping to get bnk desc,bnk length ... etc */
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "https://s3p.sabah.gov.my/api_eresit/bank" );
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

      $json = curl_exec($ch);
      curl_close($ch);

      $bank = json_decode($json, true);
      //print ($bank);

      ?>
      <label for="nam_ba">Nama Bank :</label>
      <div class="input-group mb-0">
      <select name="nama-bank" id="nama-bank">
      <?php

        foreach($bank['data'] as $bank): { ?>

        <option value="<?= ($bank['BNK_CODE']); ($bank['BNK_DESC']); ($bank['ACC_LENGTH'])?>"><?= ($bank['BNK_CODE'])." ".($bank['BNK_DESC'])?></option>
        
       <?php } endforeach;
       ?>
       
      </select>
      </div>
      <br>
      <br>

      <p>Saya mengesahkan bahawa maklumat dan butir-butir mengenai akaun bank seperti di atas adalah milik saya. Saya bersetuju caj perkhidmatan 
        bank (jika ada) atas bayaran yang dikredit ke akaun berkenaan didebit ke akaun yang sama.</p>
      <br>
      <br>

      <p><label for="tandatangan">Tandatangan :</label>_____________________________________________________________________________________<p><br>
      <p><label for="nama-penuh">Nama Penuh :</label><input type="text" class="text-line" name="nama-penuh"><label for="cop-syarikat"> Cop Syarikat :</label><input type="text" class="text-line1" name="cop-syarikat">
      <br>
      <br>
      <br>
      <p><label for="tarikh">Tarikh 
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;:</label>_____________________________________________________________________________________<p>

  <p class="text-center">
	<input type="submit" class="btn btn-danger btn-sm" value="Generate Pdf"></input>
  </p>
</div>
</form>
</body>
</html>