<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memanggil File Require</title>
</head>
<body>
    <?php
        require ("menggunakan_require.php"); //akan dipanggil 1x aja
        //dalam file php ini
        tulistebal("Ini adalah tulisan tebal");
        echo "<br>";
        echo $a; //mengambil nilai dari require
    ?>
</body>
</html>