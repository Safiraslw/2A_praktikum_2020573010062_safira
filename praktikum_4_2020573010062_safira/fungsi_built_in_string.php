<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Built-in String</title>
</head>
<body>
    <?php
        $str = "Belajar PHP ternyata menyenangkan";
        echo strtolower($str); //ubah huruf ke kecil semua 
        echo "<br>";
        echo strtoupper($str); //ubah huruf ke besar semua
        echo "<br>";
        echo str_replace ("Menyenangkan","mudah lho",$str); //mengganti string
    ?>
</body>
</html>