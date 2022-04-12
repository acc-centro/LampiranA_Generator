<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAMPIRAN A GENERATOR</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" crossorigin="anonymous"></script>

  <style>
      @import url('https://rsms.me/inter/inter.css');
      html { font-family: 'Inter', sans-serif; }

      @supports (font-variation-settings: normal) {
        html { font-family: 'Inter var', sans-serif; }
        body { padding: 10px; }
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

  <script type="text/javascript">
  $(document).ready(function() {
    $('#nama_bank').select2();
    // $('input.form-control.text-center.mobile-verify.pass').on('keyup', function() {
    //   if ($(this).val()) {
    //       $(this).next().focus();
    //   }
    // });
  });
  </script>
</head>

<body>
<!-- Page Header -->
<header>
  <div class="p-5 text-center" >
    <h2 class="mb-1" style="font-size:16px">Borang Pengesahan Akaun Bank</h2>
    <h1 class="mb-1" style="font-size:22px">
      <b>Untuk Pembayaran Am</b>
    </h1>
    <h3 class="mb-3" style="font-size:18px">
      <u>Melalui Alliance Online Banking</u>
    </h3>
  </div>
</header>

<div class="container">
  <form action="LampA_pdf.php" method="post">

      <label for="nom_kp">Nombor Kad Pengenalan Baru :</label>
      <input type="text" class="form-control text-left" maxlength="14" name="ID_number">

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
    </div>

    <div class="mb-3 row">
      <label for="mykad" class="col-sm-2 col-form-label">No.MyKad</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="ID_number" id="mykad" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
        <small>(Masukkan digit sahaja)</small>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="passport" class="col-sm-2 col-form-label">No.Pasport</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="13" name="pasport_number" id="passport" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
      </div>
    </div>

    <?php 
    /* use curl and decode json to receive all banks;
    use foreach looping to get bnk desc,bnk length ... etc */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://s3p.sabah.gov.my/api_eresit/bank" );
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($ch);
    curl_close($ch);
    $bank = json_decode($json, true);
    ?>

    <div class="mb-3 row">
      <label for="nama_bank" class="col-sm-2 col-form-label">Nama Bank</label>
      <div class="col-sm-10">
        <select class="form-control form-select" aria-label="Pilih bank" name="nama-bank" id="nama_bank" required>
            <option value="">-- SIla pilih Bank --</option>
          <?php foreach($bank['data'] as $bank): ?>
            <option value="<?= $bank['BNK_DESC']; ?>"><?= $bank['BNK_CODE'].' - '.$bank['BNK_DESC'].' ('.$bank['ACC_LENGTH'].' digit)'; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="mb-5 row">
      <label for="bank_acc" class="col-sm-2 col-form-label">No.Akaun Bank</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="16" name="acc_number" id="bank_acc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
        <small>Masukkan digit sahaja<br>* Bagi pemegang akaun <b>BSN</b> format baru 21-digit, anda dikehendaki untuk menggunakan nombor alternatif 16-digit yang disediakan oleh pihak BSN</small>
      </div>
    </div>

    <p class="text-center">
	   <input type="submit" class="btn btn-danger btn-lg" value="Generate PDF &amp; Print"></input>
    </p>
  </div>
</form>
</body>
</html>