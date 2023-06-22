<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Hasil | Profile Matching</title>
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


    <!-- Table -->
    <form  role="form" method="post" class="form-inline">
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
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapsiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["gapmm"];?></td>
                  <td><?php echo $data["gapbig"];?></td>
                  <td><?php echo $data["gapbindo"];?></td>
                  <td><?php echo $data["gapipa"];?></td>
                  <td><?php echo $data["gapor"];?></td>
                  <td><?php echo $data["gapkd"];?></td>
                  <td><?php echo $data["gappk"];?></td>
                  <td><?php echo $data["gappmr"];?></td>
                  <td><?php echo $data["gappr"];?></td>
                  <td><?php echo $data["gapkr"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <!-- /Tabel -->

    <!-- Tabel -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot MM</th>
                <th scope="col">Bobot BIG</th>
                <th scope="col">Bobot BINDO</th>
                <th scope="col">Bobot IPA</th>
                <th scope="col">Bobot OR</th>
                <th scope="col">Bobot Kedisiplinan</th>
                <th scope="col">Bobot Pramuka</th>
                <th scope="col">Bobot PMR</th>
                <th scope="col">Bobot Perilaku</th>
                <th scope="col">Bobot Kerapian</th>
                <th scope="col">NCF (60%)</th>
                <th scope="col">NSF (40%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasilsiswa");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotmm"];?></td>
                <td><?php echo $data["bobotbig"];?></td>
                <td><?php echo $data["bobotbindo"];?></td>
                <td><?php echo $data["bobotipa"];?></td>
                <td><?php echo $data["bobotor"];?></td>
                <td><?php echo $data["bobotkd"];?></td>
                <td><?php echo $data["bobotpk"];?></td>
                <td><?php echo $data["bobotpmr"];?></td>
                <td><?php echo $data["bobotpr"];?></td>
                <td><?php echo $data["bobotkr"];?></td>
                <td><?php echo $data["ncf"];?></td>
                <td><?php echo $data["nsf"];?></td>
                <td><?php echo $data["hasil"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Tabel -->

    <br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="rangking.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Perankingan">
        </div>
        <button type="submit" name="submitranking" class="btn btn-info">Ranking!</button>
    </form>
    <!-- /Hapus Record -->

    </div>

</body>
</html>