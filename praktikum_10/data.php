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
        <h5 class="card-header">Data Peminjam Barang TA 2021-2022</h5>
        <div class="card-body">
        <h5 class="card-title">S1PBAR</h5>
        <p class="card-text">
            Klik tombol 'Pinjam' untuk melakukan peminjaman barang!!!
        </p>
        <a href="peminjaman.php" class="btn btn-primary">Pinjam</a>
        </div>
        <?php
           $host = "localhost";
           $user = "root";
           $pass = "";
           $database = "db_sipbar";

           $db = mysqli_connect($host, $user, $pass, $database)
           or die ("koneksi gagal");
       

           $query = "SELECT*FROM tb_pinjam";
           $hasil = mysqli_query($db,$query);

           ?>
           <form>
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">Nama</th>
                           <th scope="col">NIM</th>
                           <th scope="col">Kelas</th>
                           <th scope="col">Tanggal Pinjam</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php while($row = mysqli_fetch_assoc($hasil)){ ?>
                       <tr>
                           <td> <?php echo $row['nama']; ?> </td>
                           <td> <?php echo $row['nim']; ?> </td>
                           <td> <?php echo $row['kelas']; ?> </td>
                           <td> <?php echo $row['tgl_pinjam'];?> </td>
                       </tr> <br>
                   </tbody>
                   <?php
           }
           $hasil = mysqli_query($db, $query);
           $row = mysqli_fetch_assoc($hasil);
       ?>
               </table>
       </div>
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