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
        <form action="simpan.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <label for="" class="form-label">Prodi</label>
        <select class="form-select" aria-label="Default select example" name="prodi">
            <option selected>Prodi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="TRKJ">Teknologi Rekayasa Komputer dan Jaringan</option>
            <option value="TRMM">Teknologi Rekayasa Multimedia</option>
        </select>
        <div class="mb-3">
        <label for="" class="form-label">Barang</label>
        <div class="row g-3">
            <div class="col">
            <input type="text" class="form-control" id="kode_barang" placeholder="kode barang" name="kode_barang">
        </div>
        <div class="col">
            <input type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
        </div>
        </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
        </div>
            <button type="submit" class="btn btn-primary">Pinjam</button>
            <a href="barang.php" class="btn btn-primary">Daftar Barang</a>
        </form>
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