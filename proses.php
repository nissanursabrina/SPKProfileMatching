<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <!-- Hapus Record -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah Mahasiswa">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Hapus Record -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
        session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahsiswa'])){

                $jumlah = $_SESSION['jumlahsiswa'];
                $nama = array();

                $nilaimm = array();
                $textmm = array();
                $gapmm = array();
                $bobotmm = array();

                $nilaibig = array();
                $textbig = array();
                $gapbig = array();
                $bobotbig = array();

                $nilaibindo = array();
                $textbindo = array();
                $gapbindo = array();
                $bobotbindo = array();

                $nilaiipa = array();
                $textipa = array();
                $gapipa = array();
                $bobotipa = array();

                $nilaior = array();
                $textor = array();
                $gapor = array();
                $bobotor = array();

                $nilaikd = array();
                $textkd = array();
                $gapkd = array();
                $bobotkd = array();

                $nilaipk = array();
                $textpk = array();
                $gappk = array();
                $bobotpk = array();

                $nilaipmr = array();
                $textpmr = array();
                $gappmr = array();
                $bobotpmr = array();

                $nilaipr = array();
                $textpr = array();
                $gappr = array();
                $bobotpr = array();

                $nilaikr = array();
                $textkr = array();
                $gapkr = array();
                $bobotkr = array();

                $ncfsiswa = array();
                $nsfsiswa = array();
                $hasilsiswa = array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaimm[$a] = $_POST['mm'.$a];
                   $nilaibig[$a] = $_POST['big'.$a];
                   $nilaibindo[$a] = $_POST['bindo'.$a];
                   $nilaiipa[$a] = $_POST['ipa'.$a];
                   $nilaior[$a] = $_POST['og'.$a];
                   $nilaikd[$a] = $_POST['kd'.$a];
                   $nilaipk[$a] = $_POST['pk'.$a];
                   $nilaipmr[$a] = $_POST['pmr'.$a];
                   $nilaipr[$a] = $_POST['pr'.$a];
                   $nilaikr[$a] = $_POST['kr'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO siswa (nama, mm, big, bindo, ipa, og, kd, pk, pmr, pr, kr ) VALUES('$nama[$a]','$nilaimm[$a]','$nilaibig[$a]','$nilaibindo[$a]','$nilaiipa[$a]','$nilaior[$a]','$nilaikd[$a]','$nilaipk[$a]','$nilaipmr[$a]','$nilaipr[$a]','$nilaikr[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($nilaimm[$a] == "1"){
                        $textmm[$a] = "0-25";
                    } elseif ($nilaimm[$a] == "2") {
                        $textmm[$a] = "26-50";
                    } elseif ($nilaimm[$a] == "3") {
                        $textmm[$a] = "51-75";
                    } else {
                        $textmm[$a] = "76-100";
                    }

                    if ($nilaibig[$a] == "1"){
                        $textbig[$a] = "0-25";
                    } elseif ($nilaibig[$a] == "2") {
                        $textbig[$a] = "26-50";
                    } elseif ($nilaibig[$a] == "3") {
                        $textbig[$a] = "51-75";
                    } else {
                        $textbig[$a] = "76-100";
                    }

                    if ($nilaibindo[$a] == "1"){
                        $textbindo[$a] = "0-25";
                    } elseif ($nilaibindo[$a] == "2") {
                        $textbindo[$a] = "26-50";
                    } elseif ($nilaibindo[$a] == "3") {
                        $textbindo[$a] = "51-75";
                    } else {
                        $textbindo[$a] = "76-100";
                    }

                    if ($nilaiipa[$a] == "1"){
                        $textipa[$a] = "0-25";
                    } elseif ($nilaiipa[$a] == "2") {
                        $textipa[$a] = "26-50";
                    } elseif ($nilaiipa[$a] == "3") {
                        $textipa[$a] = "51-75";
                    } else {
                        $textipa[$a] = "76-100";
                    }

                    if ($nilaior[$a] == "1"){
                        $textor[$a] = "Sangat Buruk";
                    } elseif ($nilaior[$a] == "2") {
                        $textor[$a] = "Buruk";
                    } elseif ($nilaior[$a] == "3") {
                        $textor[$a] = "Cukup";
                    } else {
                        $textor[$a] = "Baik";
                    }

                    if ($nilaikd[$a] == "1"){
                        $textkd[$a] = "Sangat Buruk";
                    } elseif ($nilaikd[$a] == "2") {
                        $textkd[$a] = "Buruk";
                    } elseif ($nilaikd[$a] == "3") {
                        $textkd[$a] = "Cukup";
                    } else {
                        $textkd[$a] = "Baik";
                    }

                    if ($nilaipk[$a] == "1"){
                        $textpk[$a] = "Sangat Buruk";
                    } elseif ($nilaipk[$a] == "2") {
                        $textpk[$a] = "Buruk";
                    } elseif ($nilaipk[$a] == "3") {
                        $textpk[$a] = "Cukup";
                    } else {
                        $textpk[$a] = "Baik";
                    }

                    if ($nilaipmr[$a] == "1"){
                        $textpmr[$a] = "Sangat Buruk";
                    } elseif ($nilaipmr[$a] == "2") {
                        $textpmr[$a] = "Buruk";
                    } elseif ($nilaipmr[$a] == "3") {
                        $textpmr[$a] = "Cukup";
                    } else {
                        $textpmr[$a] = "Baik";
                    }

                    if ($nilaipr[$a] == "1"){
                        $textpr[$a] = "Sangat Buruk";
                    } elseif ($nilaipr[$a] == "2") {
                        $textpk[$a] = "Buruk";
                    } elseif ($nilaipr[$a] == "3") {
                        $textpr[$a] = "Cukup";
                    } else {
                        $textpr[$a] = "Baik";
                    }

                    if ($nilaikr[$a] == "1"){
                        $textkr[$a] = "Sangat Buruk";
                    } elseif ($nilaikr[$a] == "2") {
                        $textkr[$a] = "Buruk";
                    } elseif ($nilaikr[$a] == "3") {
                        $textkr[$a] = "Cukup";
                    } else {
                        $textkr[$a] = "Baik";
                    }

                    $sql = mysqli_query($koneksi,"INSERT INTO keterangansiswa (nama, ket_mm, ket_big, ket_bindo, ket_ipa, ket_or, ket_kd, ket_pk, ket_pmr, ket_pr, ket_kr) VALUES('$nama[$a]','$textmm[$a]','$textbig[$a]','$textbindo[$a]','$textipa[$a]','$textor[$a]','$textkd[$a]','$textpk[$a]','$textpmr[$a]','$textpr[$a]','$textkr[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapmm[$a] = $nilaimm[$a] - 3;
                    $gapbig[$a] = $nilaibig[$a] - 3;
                    $gapbindo[$a] = $nilaibindo[$a] - 3;
                    $gapipa[$a] = $nilaiipa[$a] - 3;
                    $gapor[$a] = $nilaior[$a] - 3;
                    $gapkd[$a] = $nilaikd[$a] - 3;
                    $gappk[$a] = $nilaipk[$a] - 3;
                    $gappmr[$a] = $nilaipmr[$a] - 3;
                    $gappr[$a] = $nilaipr[$a] - 3;
                    $gapkr[$a] = $nilaikr[$a] - 3;

                    $sql = mysqli_query($koneksi,"INSERT INTO gapsiswa (nama, gapmm, gapbig, gapbindo, gapipa, gapor, gapkd, gappk, gappmr, gappr, gapkr) VALUES('$nama[$a]','$gapmm[$a]','$gapbig[$a]','$gapbindo[$a]','$gapipa[$a]','$gapor[$a]','$gapkd[$a]','$gappk[$a]','$gappmr[$a],'$gappr[$a]','$gapkr[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gapmm[$a] == "0"){
                        $bobotmm[$a] = "5";
                    } elseif ($gapmm[$a] == "1") {
                        $bobotmm[$a] = "4.5";
                    } elseif ($gapmm[$a] == "-1") {
                        $bobotmm[$a] = "4";
                    } elseif ($gapmm[$a] == "2") {
                        $bobotmm[$a] = "3.5";
                    } elseif ($gapmm[$a] == "-2") {
                        $bobotmm[$a] = "3";
                    } elseif ($gapmm[$a] == "3") {
                        $bobotmm[$a] = "2.5";
                    } elseif ($gapmm[$a] == "-3") {
                        $bobotmm[$a] = "2";
                    } elseif ($gapmm[$a] == "4") {
                        $bobotmm[$a] = "1.5";
                    } else {
                        $bobotmm[$a] = "1";
                    }

                    if ($gapbig[$a] == "0"){
                        $bobotbig[$a] = "5";
                    } elseif ($gapbig[$a] == "1") {
                        $bobotbig[$a] = "4.5";
                    } elseif ($gapbig[$a] == "-1") {
                        $bobotbig[$a] = "4";
                    } elseif ($gapbig[$a] == "2") {
                        $bobotbig[$a] = "3.5";
                    } elseif ($gapbig[$a] == "-2") {
                        $bobotbig[$a] = "3";
                    } elseif ($gapbig[$a] == "3") {
                        $bobotbig[$a] = "2.5";
                    } elseif ($gapbig[$a] == "-3") {
                        $bobotbig[$a] = "2";
                    } elseif ($gapbig[$a] == "4") {
                        $bobotbig[$a] = "1.5";
                    } else {
                        $bobotbig[$a] = "1";
                    }

                    if ($gapbindo[$a] == "0"){
                        $bobotbindo[$a] = "5";
                    } elseif ($gapbindo[$a] == "1") {
                        $bobotbindo[$a] = "4.5";
                    } elseif ($gapbindo[$a] == "-1") {
                        $bobotbindo[$a] = "4";
                    } elseif ($gapbindo[$a] == "2") {
                        $bobotbindo[$a] = "3.5";
                    } elseif ($gapbindo[$a] == "-2") {
                        $bobotbindo[$a] = "3";
                    } elseif ($gapbindo[$a] == "3") {
                        $bobotbindo[$a] = "2.5";
                    } elseif ($gapbindo[$a] == "-3") {
                        $bobotbindo[$a] = "2";
                    } elseif ($gapbindo[$a] == "4") {
                        $bobotbindo[$a] = "1.5";
                    } else {
                        $bobotbindo[$a] = "1";
                    }

                    if ($gapipa[$a] == "0"){
                        $bobotipa[$a] = "5";
                    } elseif ($gapipa[$a] == "1") {
                        $bobotipa[$a] = "4.5";
                    } elseif ($gapipa[$a] == "-1") {
                        $bobotipa[$a] = "4";
                    } elseif ($gapipa[$a] == "2") {
                        $bobotipa[$a] = "3.5";
                    } elseif ($gapipa[$a] == "-2") {
                        $bobotipa[$a] = "3";
                    } elseif ($gapipa[$a] == "3") {
                        $bobotipa[$a] = "2.5";
                    } elseif ($gapipa[$a] == "-3") {
                        $bobotipa[$a] = "2";
                    } elseif ($gapipa[$a] == "4") {
                        $bobotipa[$a] = "1.5";
                    } else {
                        $bobotipa[$a] = "1";
                    }

                    if ($gapor[$a] == "0"){
                        $bobotor[$a] = "5";
                    } elseif ($gapor[$a] == "1") {
                        $bobotor[$a] = "4.5";
                    } elseif ($gapor[$a] == "-1") {
                        $bobotor[$a] = "4";
                    } elseif ($gapor[$a] == "2") {
                        $bobotor[$a] = "3.5";
                    } elseif ($gapor[$a] == "-2") {
                        $bobotor[$a] = "3";
                    } elseif ($gapor[$a] == "3") {
                        $bobotor[$a] = "2.5";
                    } elseif ($gapor[$a] == "-3") {
                        $bobotor[$a] = "2";
                    } elseif ($gapor[$a] == "4") {
                        $bobotor[$a] = "1.5";
                    } else {
                        $bobotor[$a] = "1";
                    }

                    if ($gapkd[$a] == "0"){
                        $bobotkd[$a] = "5";
                    } elseif ($gapkd[$a] == "1") {
                        $bobotkd[$a] = "4.5";
                    } elseif ($gapkd[$a] == "-1") {
                        $bobotkd[$a] = "4";
                    } elseif ($gapkd[$a] == "2") {
                        $bobotkd[$a] = "3.5";
                    } elseif ($gapkd[$a] == "-2") {
                        $bobotkd[$a] = "3";
                    } elseif ($gapkd[$a] == "3") {
                        $bobotkd[$a] = "2.5";
                    } elseif ($gapkd[$a] == "-3") {
                        $bobotkd[$a] = "2";
                    } elseif ($gapkd[$a] == "4") {
                        $bobotkd[$a] = "1.5";
                    } else {
                        $bobotkd[$a] = "1";
                    }

                    if ($gappk[$a] == "0"){
                        $bobotpk[$a] = "5";
                    } elseif ($gappk[$a] == "1") {
                        $bobotpk[$a] = "4.5";
                    } elseif ($gappk[$a] == "-1") {
                        $bobotpk[$a] = "4";
                    } elseif ($gappk[$a] == "2") {
                        $bobotpk[$a] = "3.5";
                    } elseif ($gappk[$a] == "-2") {
                        $bobotpk[$a] = "3";
                    } elseif ($gappk[$a] == "3") {
                        $bobotpk[$a] = "2.5";
                    } elseif ($gappk[$a] == "-3") {
                        $bobotpk[$a] = "2";
                    } elseif ($gappk[$a] == "4") {
                        $bobotpk[$a] = "1.5";
                    } else {
                        $bobotpk[$a] = "1";
                    }

                    if ($gappmr[$a] == "0"){
                        $bobotpmr[$a] = "5";
                    } elseif ($gappmr[$a] == "1") {
                        $bobotpmr[$a] = "4.5";
                    } elseif ($gappmr[$a] == "-1") {
                        $bobotpmr[$a] = "4";
                    } elseif ($gappmr[$a] == "2") {
                        $bobotpmr[$a] = "3.5";
                    } elseif ($gappmr[$a] == "-2") {
                        $bobotpmr[$a] = "3";
                    } elseif ($gappmr[$a] == "3") {
                        $bobotpmr[$a] = "2.5";
                    } elseif ($gappmr[$a] == "-3") {
                        $bobotpmr[$a] = "2";
                    } elseif ($gappmr[$a] == "4") {
                        $bobotpmr[$a] = "1.5";
                    } else {
                        $bobotpmr[$a] = "1";
                    }

                    if ($gappr[$a] == "0"){
                        $bobotpr[$a] = "5";
                    } elseif ($gappr[$a] == "1") {
                        $bobotpr[$a] = "4.5";
                    } elseif ($gappr[$a] == "-1") {
                        $bobotpr[$a] = "4";
                    } elseif ($gappr[$a] == "2") {
                        $bobotpr[$a] = "3.5";
                    } elseif ($gappr[$a] == "-2") {
                        $bobotpr[$a] = "3";
                    } elseif ($gappr[$a] == "3") {
                        $bobotpr[$a] = "2.5";
                    } elseif ($gappr[$a] == "-3") {
                        $bobotpr[$a] = "2";
                    } elseif ($gappr[$a] == "4") {
                        $bobotpr[$a] = "1.5";
                    } else {
                        $bobotpr[$a] = "1";
                    }

                    if ($gapkr[$a] == "0"){
                        $bobotkr[$a] = "5";
                    } elseif ($gapkr[$a] == "1") {
                        $bobotkr[$a] = "4.5";
                    } elseif ($gapkr[$a] == "-1") {
                        $bobotkr[$a] = "4";
                    } elseif ($gapkr[$a] == "2") {
                        $bobotkr[$a] = "3.5";
                    } elseif ($gapkr[$a] == "-2") {
                        $bobotkr[$a] = "3";
                    } elseif ($gapkr[$a] == "3") {
                        $bobotkr[$a] = "2.5";
                    } elseif ($gapkr[$a] == "-3") {
                        $bobotkr[$a] = "2";
                    } elseif ($gapkr[$a] == "4") {
                        $bobotkr[$a] = "1.5";
                    } else {
                        $bobotkr[$a] = "1";
                    }

                    $ncfsiswa[$a] = (($bobotmm[$a]) + ($bobotbig[$a]) + ($bobotbindo[$a]) + ($bobotipa[$a]) + ($bobotor[$a]) + ($bobotkd[$a]))/6;
                    $nsfsiswa[$a] = (($bobotpk[$a]) + ($bobotpmr[$a]) + ($bobotpr[$a]) + ($bobotkr[$a]))/4;
                    $hasilsiswa[$a] = (0.6 * $ncfsiswa[$a]) + (0.4 * $nsfsiswa[$a]);

                    $sql = mysqli_query($koneksi,"INSERT INTO hasilsiswa (nama, bobotmm, bobotbig, bobotbindo, bobotipa, bobotor, bobotkd, bobotpk, bobotpmr, bobotpr, bobotkr, ncf, nsf, hasil) VALUES('$nama[$a]','$bobotmm[$a]','$bobotbig[$a]','$bobotbindo[$a]','$bobotipa[$a]','$bobotor[$a]','$bobotkd[$a]','$bobotpk[$a]','$bobotpmr[$a]','$bobotpr[$a]','$bobotkr[$a]','$ncfsiswa[$a]','$nsfsiswa[$a]','$hasilsiswa[$a]')") or die (mysqli_error($koneksi));

                }

    ?>

    <!-- TUTUP -->
    <?php
            }
        }
    ?>
    <!-- /TUTUP -->
    <br><br>
    <!-- Table -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">MM</th>
              <th scope="col">BIG</th>
              <th scope="col">BINDO</th>
              <th scope="col">IPA</th>
              <th scope="col">OR</th>
              <th scope="col">Kedisiplinan</th>
              <th scope="col">Pramuka</th>
              <th scope="col">PMR</th>
              <th scope="col">Perilaku</th>
              <th scope="col">Kerapian</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keterangansiswa");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_mm"];?></td>
                <td><?php echo $data["ket_big"];?></td>
                <td><?php echo $data["ket_bindo"];?></td>
                <td><?php echo $data["ket_ipa"];?></td>
                <td><?php echo $data["ket_or"];?></td>
                <td><?php echo $data["ket_kd"];?></td>
                <td><?php echo $data["ket_pk"];?></td>
                <td><?php echo $data["ket_pmr"];?></td>
                <td><?php echo $data["ket_pr"];?></td>
                <td><?php echo $data["ket_kr"];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>
                    </div>
                </td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->


    <br><br>


    <!-- Table -->
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">MM</th>
                  <th scope="col">BIG</th>
                  <th scope="col">BINDO</th>
                  <th scope="col">IPA</th>
                  <th scope="col">OR</th>
                  <th scope="col">Kedisiplinan</th>
                  <th scope="col">Pramuka</th>
                  <th scope="col">PMR</th>
                  <th scope="col">Perilaku</th>
                  <th scope="col">Kerapian</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["mm"];?></td>
                  <td><?php echo $data["big"];?></td>
                  <td><?php echo $data["bindo"];?></td>
                  <td><?php echo $data["ipa"];?></td>
                  <td><?php echo $data["og"];?></td>
                  <td><?php echo $data["kd"];?></td>
                  <td><?php echo $data["pk"];?></td>
                  <td><?php echo $data["pmr"];?></td>
                  <td><?php echo $data["pr"];?></td>
                  <td><?php echo $data["kr"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>
    <!-- /Tabel -->

    </div>

</body>
</html>