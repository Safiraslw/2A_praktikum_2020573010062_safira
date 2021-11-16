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
            <div class="card">
        <h5 class="card-header">Data Mahasiswa</h5>
        <div class="card-body">
        <h5 class="card-title">SISTEM INFORMASI PEMINJAMAN BARANG JURUSAN TIK</h5>
        <p class="card-text">Klik tombol di bawah untuk memasukkan data diri.
        </p>
        <a href="#" class="btn btn-primary">Buat</a>
  </div>
</div>
        </div>
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

<!--<li>
        <a href="dosen.php" class="nav-link link-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-2" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
          Dosen
        </a>
      </li>
-->