<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemakaian Variabel 2 - safira</title>
</head>
<body>
    <?php
        $jalan = "Medan - B.Aceh";
        $noRumah = 29;
        $blok = "4C";
        $jumlahPenghuni = 3;
        echo "Hasil Variabel variabel jalan + variabel noRumah adalah <br>";
        echo $alamat = $jalan . $noRumah;
        echo "<br>";
        echo "Hasil Variabel variabel noRumah + variabel jumlahPenghuni adalah <br>";
        echo $hasil = $noRumah + $jumlahPenghuni;
        echo "<br>";
        echo "Hasil Variabel variabel blok + variabel noRumah adalah <br>";
        echo $hasil = $blok .  $noRumah;
        echo "<b>";
    ?>
</body>
</html>