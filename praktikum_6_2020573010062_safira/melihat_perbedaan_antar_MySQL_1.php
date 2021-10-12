<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi database MySQL</title>
</head>
<body>
    <h1>Koneksi database dengan mysql_fetch_array</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "db_saya")
        or die ("koneksi gagal");
        $hasil = mysqli_query($conn, "select * from liga");
        while ($row = mysqli_fetch_array($hasil)){
            echo "Liga  " . $row["negara"]; //array asosiatif
            echo " mempunyai  " . $row[2]; //array numerik
            echo " wakil di liga champion <br>";
        } 
    ?>
</body>
</html>