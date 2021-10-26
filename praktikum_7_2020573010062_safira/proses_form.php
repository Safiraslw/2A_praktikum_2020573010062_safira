<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Simpan Form</h1>
    <?php
        $nama       = $_POST["Nama"];
        $alamat     = $_POST["Alamat"];
        $t_lahir    = $_POST["Tempat_lahir"];
        $tgl_lahir  = $_POST["Tanggal_lahir"];
        $jk         = $_POST["Jenis_kelamin"];
        $no_hp      = $_POST["Nomor_hp"];
        $bahasa     = $_POST["Bahasa"];
        $riwayat    = $_POST["Riwayat"];
        $hobi       = $_POST["Hobi"];
        $hobi_lain  = $_POST["Hobi_lainnya"];
        $motto      = $_POST["Motto"];
        $conn       = mysqli_connect("localhost", "root", "", "praktikum7") 
        or die ("Koneksi gagal");

        echo "Nama Lengkap    : $nama <br>";
        echo "Alamat          : $alamat <br>";
        echo "Tempat Lahir    : $t_lahir <br>";
        echo "Tanggal Lahir   : $tgl_lahir <br>";
        echo "Jenis Kelamin   : $jk <br>";
        echo "Nomor Hp        : $no_hp <br>";
        echo "Pilihan Bahasa  : $bahasa <br>";
        echo "Riwayat         : $riwayat <br>";
        echo "Hobi            : $hobi <br>";
        echo "Hobi Lainnya    : $hobi_lain <br>";
        echo "Motto           : $motto <br>";
            
        $sqlstr="insert into form (Nama, Alamat, Tempat_lahir, Tanggal_lahir, Jenis_kelamin, 
        Nomor_hp, Bahasa, Riwayat, Hobi, Hobi_lainnya, Motto) 
        values ('$nama','$alamat','$t_lahir','$tgl_lahir','$jk','$no_hp','$bahasa',
        '$riwayat','$hobi','$hobi_lain','$motto')";
        $hasil = mysqli_query($conn,$sqlstr);
        echo "Pendaftaran Berhasil";
    ?>
</body>
</html>