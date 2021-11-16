<?php
    require "proses/session.php"
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>
<body>
    <div class="container-fluid">
<!-- Awal Header -->
    <?php
        require "header.php";
    ?>
<!-- Akhir Header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <!--Awal Sidebar -->
        <?php
            require "sidebar.php";
        ?>
        <!-- Akhir Sidebar -->
        </div>
        <!--Konten -->
        <div class="col-9">
        <!--Konten -->
        <table class="table">
          <thead>
              <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">#</th>
             </tr>
            </thead>
          <tbody>
              <tr>
                <td>1271</td>
                <td>LCD</td>
                <td>with VGA cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1272</td>
                <td>LCD</td>
                <td>with VGA cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1273</td>
                <td>LCD</td>
                <td>with VGA cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1274</td>
                <td>LCD</td>
                <td>with VGA cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1275</td>
                <td>LCD</td>
                <td>with VGA & HDMI cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1276</td>
                <td>LCD</td>
                <td>with VGA cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>1278</td>
                <td>LCD</td>
                <td>with VGA & HDMI cable</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>7701</td>
                <td>Kunci LAB</td>
                <td>Lab Computer Vision</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>7702</td>
                <td>Kunci LAB</td>
                <td>Lab Telematika</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>7703</td>
                <td>Kunci LAB</td>
                <td>Lab Information Processing</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>7704</td>
                <td>Kunci LAB</td>
                <td>Lab Jaringan dan Multimedia</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
              <tr>
                <td>7705</td>
                <td>Kunci LAB</td>
                <td>Lab Rekayasa Sistem dan Software</td>
                <td><a href="peminjaman.php" class="btn btn-primary">Pinjam</a></td>
               </tr>
          </tbody>
        </table>
        <!-- Akhir Isi Konten -->
  </div>
</div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>