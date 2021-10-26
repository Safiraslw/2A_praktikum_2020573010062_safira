<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
<?php
$link = mysql_connect("localhost", "root", ""); 
if (!$link) {
die('Not connected : ' . mysql_error());
}
// make foo the current db
$db_selected = mysql_select_db("foo", $link); 
if (!$db_selected) {
die ('Pemilihan database foo gagal : ' . mysql_error());
}
?>

</body>
</html>