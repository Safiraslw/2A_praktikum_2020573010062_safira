<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memanggil File Include</title>
</head>
<body>
    <?php
        for ($b=1; $b<5; $b++)
        {
            include("menggunakan_include.php");
            //include bisa dipanggil lebih dari 1 kali
        }
    ?>
</body>
</html>