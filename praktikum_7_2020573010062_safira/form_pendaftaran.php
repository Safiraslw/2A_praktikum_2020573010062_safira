<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaraan</title>
</head>
<body>
    <h1>Form Pendaftaran Kursus Bahasa</h1>
    <form action="proses_form.php" method="POST">
        <table border="0">
            <tr>
                <td>
                    <label for="">Nama Lengkap</label>
                </td>
                <td>
                    <input type="text" name="Nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Alamat</label>
                </td>
                <td>
                    <input type="text" name="Alamat">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tempat Lahir</label>
                </td>
                <td>
                    <input type="text" name="Tempat_lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tanggal Lahir</label>
                </td>
                <td>
                    <input type="date" name="Tanggal_lahir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Jenis Kelamin</label>
                </td>
                <td>
                    <input type="radio" name="Jenis_kelamin" value="Laki-Laki">Laki-Laki
                </td>
                <td>
                    <input type="radio" name="Jenis_kelamin" value="Perempuan">Perempuan 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nomor HP</label>
                </td>
                <td>
                    <input type="text" name="Nomor_hp">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Pilihan Bahasa</label>
                </td>
                <td>
                    <select name="Bahasa">
                        <option value=""></option>
                        <option value="Inggris">Inggris</option>
                        <option value="Mandarin">Mandarin</option>
                        <option value="Arab">Arab</option>
                        <option value="Korea">Korea</option>
                        <option value="Turki">Turki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Ceritakan Riwayat Hidup Anda</label>
                </td>
                <td>
                <textarea name="Riwayat" rows="2" cols="30"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Hobi</label>
                </td>
                <td>
                    <select name="Hobi">
                        <option value=""></option>
                        <option value="Memasak">Memasak</option>
                        <option value="Membaca">Membaca</option>
                        <option value="Menulis">Menulis</option>
                        <option value="Menyanyi">Menyanyi</option>
                        <option value="Berbelanja">Berbelanja</option>
                        <option value="Jalan-jalan">Jalan-jalan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Isi Kolom di Bawah Untuk Pilihan Hobi Lainnya</label>
                </td>
                <td>
                <input type="text" name="Hobi_lainnya">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Motto</label>
                </td>
                <td>
                    <textarea name="Motto" rows="2" cols="10"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>