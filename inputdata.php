<?php
    include "koneksi.php";
?>

<html>
<head>
	<title>Input | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="index.php">Home</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="inputdata.php">Input Data</a>
      		</li>
          <li class="nav-item">
            <a class="nav-link" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rangking.php">Ranking</a>
          </li>
      		<li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
    	</ul>
  		</div>
	</nav>
	<!-- /Navbar -->

	<div class="container"><br><br>


	<!-- Form awal -->
	<form  role="form" method="post" class="form-inline" class="animated infinite zoomIn delay-2s">
  		<div class="form-group mb-2">
    		<label class="sr-only"></label>
    		<input type="text" readonly class="form-control-plaintext" value="Jumlah Mahasiswa">
  		</div>
  		<div class="form-group mx-sm-3 mb-2">
    		<select name="jmlsiswa" class="form-control" id="exampleFormControlSelect1">
      			<option>Choose</option>
      			<option value="1">1</option>
      			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    		</select>
  		</div>
  		<button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
	</form>
	<!-- /Form -->



	<!-- Form -->
	<?php
	 if(isset($_POST['submit'])) {
	?>
	 <form  role="form" method="post" action="proses.php"><br>
	 <?php
	  session_start();
		$jumlah = $_POST['jmlsiswa'];
		$_SESSION['jumlahsiswa'] = $jumlah;
			for($a=1;$a<=$jumlah;$a++) {
	 ?>

  	<div class="form-group">
  		<label><b>Mahasiswa ke <?php echo$a; ?></b></label><br>
    	<label for="exampleFormControlInput1">Nama Mahasiswa</label>
    	<input class="form-control" placeholder="Nama Siswa" name="namasiswa<?php echo $a; ?>" autocomplete="off">
 	  </div>
 	<div class="form-group">
    	<label for="exampleFormControlSelect1">MM</label>
    	<select name="mm<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect1">
      		<option>----Select an option----</option>
      		<option value="1">0-25</option>
      		<option value="2">26-50</option>
			<option value="3">51-75</option>
			<option value="4">76-100</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">BIG</label>
    	<select name="big<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">0-25</option>
      		<option value="2">26-50</option>
			<option value="3">51-75</option>
			<option value="4">76-100</option>
    	</select>
  	</div>			
	  <div class="form-group">
    	<label for="exampleFormControlSelect2">BINDO</label>
    	<select name="bindo<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">0-25</option>
      		<option value="2">26-50</option>
			<option value="3">51-75</option>
			<option value="4">76-100</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">IPA</label>
    	<select name="ipa<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">0-25</option>
      		<option value="2">26-50</option>
			<option value="3">51-75</option>
			<option value="4">76-100</option>
    	</select>
  	</div>
	  <div class="form-group">
    	<label for="exampleFormControlSelect2">OR</label>
    	<select name="og<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kedisiplinan</label>
    	<select name="kd<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Pramuka</label>
    	<select name="pk<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">PMR</label>
    	<select name="pmr<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
	  <div class="form-group">
    	<label for="exampleFormControlSelect2">Perilaku</label>
    	<select name="pr<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kerapian</label>
    	<select name="kr<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">Sangat Buruk</option>
      		<option value="2">Buruk</option>
			<option value="3">Cukup</option>
			<option value="4">Baik</option>
    	</select>
  	</div>
 	<br>
 	<?php } ?>
  		<button type="submit" name="submitform" class="btn btn-primary">Submit</button><br>
	</form>
	<?php } ?>
	<!-- /Form -->

	</div>

</body>
</html>