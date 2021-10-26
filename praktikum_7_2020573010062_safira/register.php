<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaraan</title>
</head>
<body>
    <form action="proses_register.php" method="POST">
        <table border="0">
            <tr>
                <td>
                    <label for="">Username </label>
                </td>
                <td>
                    <input type="text" name="Username" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Password </label>
                </td>
                <td>
                    <input type="password" name="Password" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Ulangi Password </label>
                </td>
                <td>
                    <input type="password" name="upassword" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nama </label>
                </td>
                <td>
                    <input type="text" name="Nama" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tempat Lahir </label>
                </td>
                <td>
                    <input type="text" name="Tempat_lahir" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Lahir </label>
                </td>
                <td>
                    <input type="date" name="Tanggal_lahir" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Alamat </label>
                </td>
                <td>
                    <input type="text" name="Alamat" >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>