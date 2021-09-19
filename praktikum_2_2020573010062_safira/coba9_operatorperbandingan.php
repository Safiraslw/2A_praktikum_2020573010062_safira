<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan - Safira</title>
</head>
<body>
    <?php
        $x = 4;
        $a = ($x == 4);
        echo "\$a = $a <br>";
        $b = ($x === "4");
        echo "\$b = $b <br>";
        $c = ($x != 4);
        echo "\$c = $c <br>";
        $d = ($x !== "4");
        echo "\$d = $d <br>";
        $e = ($x < 5);
        echo "\$e = $e <br>";
        $f = ($x > 5);
        echo "\$f = $f <br>";
        $g = ($x <= 4);
        echo "\$g = $g <br>";
        $h = ($x >= 5);
        echo "\$h = $h <br>";
    ?>
</body>
</html>