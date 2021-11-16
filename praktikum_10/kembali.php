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
                            <th scope="col">Id Pinjam</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($hasil)){ ?>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['nama']; ?> </td>
                            <td> <?php echo $row['nama_barang'];?> </td>
                            <td><a href="hapus.php" class="btn btn-primary">Kembalikan</a></td>
                        </tr> <br>
                    </tbody>
                    <?php
            }
            $hasil = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($hasil);
        ?>
                </table>
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