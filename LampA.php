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
      <u>Melalui Alliance Online BANKING</u>
    </h3>
  </div>
</header>

<div class="container">
<form action="LampA_pdf.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" style="text-transform: uppercase;" class="form-control text-left" maxlength="60" name="full_name">

        <?php /*
        <div class="input-group mb-0">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n1">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n2">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n3">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n4">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n5">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n6">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n7">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center"  maxlength="1" name="n8">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n9">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n10">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n11">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n12">
        <input type="text" style="text-transform: uppercase;"class="form-control text-center" maxlength="1" name="n13">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n14">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n15">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n16">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n17">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n18">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n19">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n20">
        </div>  
        
        <div class="input-group mb-0">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n21">
        <input type="text" style="text-transform: uppercase;" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n22">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n23">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n24">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n25">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n26">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n27">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n28">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n29">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n30">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n31">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n32">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n33">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n34">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n35">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n36">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n37">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n38">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n39">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n40">
        </div> 

        <div class="input-group mb-3">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n41">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n42">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n43">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n44">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n45">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n46">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n47">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n48">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n49">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n50">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n51">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n52">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center"  maxlength="1" name="n53">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n54">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n55">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n56">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n57">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n58">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n59">
        <input type="text" style="text-transform: uppercase;" class="form-control text-center" maxlength="1" name="n60">
        */ ?>
        <p>(Ejaan nama seperti pada kad pengenalan. Gelaran pada hadapan nama seperti Datuk, Mr., Encik, Haji, Cik dsb tidak dibenarkan)</p>
        </div>
      <br>

      <label for="nom_kp">Nombor Kad Pengenalan Baru :</label>
      <div class="input-group mb-0">
      <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n61">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n62">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n63">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n64">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n65">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n66">
      <div class="input-group-prepend"><span class="input-group-text">-</span></div>
      <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n67">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n68">
      <div class="input-group-prepend"><span class="input-group-text">-</span></div>
      <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n69">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n70">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n71">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n72">
      </div>
      <br>
      <br>

      <label for="nom_pas"><b>Nombor Pasport :</b></label>
      <div class="input-group mb-0">
      <input type="number"  class="form-control text-center"  oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n73">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n74">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n75">
        <input type="number"class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n76">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n77">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n78">
        <input type="number" class="form-control text-center"  oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n79">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n80">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n81">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n82">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n83">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n84">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n85">
      </div>
      <br>
      <br>

      <label for="nom_ab">Nombor Akaun Bank :</label>
      <div class="input-group mb-0">
      <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n86">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n87">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n88">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n89">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n90">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n91">
        <input type="number" class="form-control text-center"  oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n92">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n93">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n94">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n95">
        <input type="number"  class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n96">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n97">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }"name="n98">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n99">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n100">
        <input type="number" class="form-control text-center" oninput="if((this.value.length) > 1) { this.value = this.value.substring(0, 1); }" name="n101">
      </div>
      <p>(Nombor Akaun mestilah berturutan tanpa sengkang [space])</p>
      <br>

      <label for="nam_ba">Nama Bank :</label>
      <div class="input-group mb-0">
      <select name="nama-bank" id="nama-bank">
        <option value="Bank Islam Malaysia Berhad" maxlength=16>Bank Islam Malaysia Berhad</option>
        <option value="Maybank Berhad" maxlength=16>Maybank Berhad</option>
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