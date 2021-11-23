<?php
include "proses/session.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_user user
LEFT JOIN tb_mahasiswa mhs ON user.id = mhs.id_user
WHERE Username='$_SESSION[Username]'");
$data = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php
        require "header.php";
        ?>
        <!-- Akhir Header -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <!-- Sidebar -->
                    <?php
                    require "sidebar.php";
                    ?>
                    <!-- Akhir Sidebar -->
                </div>
                <!-- Isi Konten -->
                <div class="col-9 mt-3">
                    <h4>Profile</h4>
                    <hr>
                    <div class="card mt-4">
                        <h5 class="card-header" style="background-color:#ffc0cb;">Profile User</h5>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" aria-describedby="emailHelp" value="<?php 
                                    echo $data['Username']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Level</label>
                                    <input type="level" class="form-control" value="<?php 
                                    echo $data['Level']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIM</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['NIM']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Nama']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kelas</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Kelas']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Prodi</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Prodi']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Alamat']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Tgl_Lahir']; ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" value="<?php 
                                    echo $data['Tempat_lahir']; ?>" disabled>
                                </div>
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Isi Konten -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>