<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Simpan Register MySQL</h1>
    <?php
        $username    = $_POST["Username"];
        $password    = $_POST["Password"];
        $upassword   = $_POST["upassword"];
        $nama        = $_POST["Nama"];
        $t_lahir     = $_POST["Tempat_lahir"];
        $tgl_lahir   = $_POST["Tanggal_lahir"];
        $alamat      = $_POST["Alamat"];
        $conn        = mysqli_connect("localhost", "root", "", "praktikum7") or die ("Koneksi gagal");

            if($password != $upassword){
                echo "Password tidak sama";
            } else {
                echo "Username        : $username <br>";
                echo "Password        : $password <br>";
                echo "Ulangi Password : $upassword <br>";
                echo "Nama            : $nama <br>";
                echo "Tempat Lahir    : $t_lahir <br>";
                echo "Tanggal Lahir   : $tgl_lahir <br>";
                echo "Alamat          : $alamat <br>";
            
                $sqlstr="insert into register(Username, Password, Nama, Tempat_lahir, Tanggal_lahir, Alamat) 
                values('$username','$password','$nama','$t_lahir','$tgl_lahir','$alamat')";
                $hasil = mysqli_query($conn,$sqlstr);
                echo "Pendaftaran Berhasil";
            }
    ?>
</body>
</html>