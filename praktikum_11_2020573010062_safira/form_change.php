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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="">
        <!-- Header -->
        <?php
        require "header.php";
        require "change.php";
        ?>
        <!-- Akhir Header -->
            <!-- Isi Konten -->
            <div class="card mt-5 me-5 ms-5" style="height:250px">
                <div class="card-header" align="center">
                    Change Password
                </div>
                <form action="#" method="POST" name="form-ganti-password" enctype="multipart/form-data">
                    <table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr height="50">
                            <td>Current Password</td>
                            <td><input type="password" name="Password_lama" id="Password_lama" size="30" maxlength="20"></td>
                        </tr>
                        <tr height="50">
                            <td>New Password</td>
                            <td><input type="password" name="Password_baru" id="Password_baru" size="30" maxlength="20"></td>
                        </tr>
                        <tr height="50">
                            <td>Confirm New Password</td>
                            <td><input type="password" name="Konf_password" id="Konf_password" size="30" maxlength="20"></td>
                        </tr>
                        <tr height="56">
                            <td> </td>
                            <td><input type="submit" name="Ganti" value="Change Password"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Akhir Isi Konten -->
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>