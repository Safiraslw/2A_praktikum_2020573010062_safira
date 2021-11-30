<div>
    <?php
    //proses ganti password
    if (isset($_POST['Ganti'])) {
        $password_lama    = md5($_POST["Password_lama"]);
        $password_baru    = md5($_POST['Password_baru']);
        $konf_password    = md5($_POST['Konf_password']);
        //cek old password
        $hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE Password='$password_lama'");
        $row = mysqli_fetch_array($hasil);
        if (!$row >= 1) {
    ?>
            <script>
                alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            </script>
    <?php
            session_destroy();
        }
        //validasi data data kosong
        else if (empty($_POST['Password_baru']) || empty($_POST['Konf_password'])) {
            echo "<script>alert('Ganti Password Gagal! Data Tidak Boleh Kosong.')</script>";
        }
        //validasi input konfirm password
        else if (($_POST['Password_baru']) != ($_POST['Konf_password'])) {
            echo "<script>alert('Ganti Password Gagal! Password dan Konfirm Password Harus Sama');</script>";
        } else {
            //update data
            $query = mysqli_query($conn, "UPDATE tb_user SET Password='$password_baru'");
            //setelah berhasil update
            if ($query) {
                echo "<script>alert('Ganti Password Berhasil!');</script>";
            } else {
                echo "<script>alert('Ganti Password Gagal!')</script>";
            }
        }
    }
    ?>
</div>