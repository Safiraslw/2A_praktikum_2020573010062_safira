<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Database</title>
</head>
<body>
    <h1>Searching Buku Tamu untuk database MySQL</h1>
    <form action="hasilsearch.php" method="POST">
        <select name="kolom">
            <option value="nama">Nama</option>
            <option value="email">Email</option>
        </select>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
</body>
</html>