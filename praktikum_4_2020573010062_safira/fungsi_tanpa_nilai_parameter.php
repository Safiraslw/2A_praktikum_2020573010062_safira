<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Tanpa Nilai Parameter</title>
</head>
<body>
    <?php
        function garis(){
            echo "<hr>";
        }
    echo "Ini contoh fungsi yang tanpa parameter <br>";
    garis();
    echo "Lihat perbedaan dengan fungsi yang dengan parameter <br>";
    garis();
    ?>
</body>
</html>