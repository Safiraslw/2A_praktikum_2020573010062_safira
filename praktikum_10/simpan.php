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
        <h1>BERHASIL!</h1>
    <?php

        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $kelas = $_POST["kelas"];
        $prodi = $_POST["prodi"];
        $kode_barang = $_POST["kode_barang"];
        $nama_barang = $_POST["nama_barang"];
        $tgl_pinjam = $_POST["tgl_pinjam"];
        $conn = mysqli_connect("localhost", "root", "", "db_sipbar")
        or die ("koneksi gagal");
        ?>
        <div class="card">
        <h5 class="card-header">Data Peminjam Barang TA 2021-2022</h5>
        <div class="card-body">
        <p class="card-text">
        <?php 
            echo "Nama          : $nama<br>";
            echo "Prodi         : $prodi <br>";
            echo "Barang        : $nama_barang <br>";
            echo "Tanggal       : $tgl_pinjam<br>";
        ?>
        </p>
        </div>

        <?php
            $sqlstr = "insert into tb_pinjam
            (nama, nim, kelas, prodi, kode_barang, nama_barang, tgl_pinjam)
            values ('$nama','$nim','$kelas','$prodi','$kode_barang','$nama_barang','$tgl_pinjam')";
            $hasil = mysqli_query($conn, $sqlstr);
            

    ?>
    <br>
    <br>
    <a href="index.php" class="btn btn-primary">Kembali</a>
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