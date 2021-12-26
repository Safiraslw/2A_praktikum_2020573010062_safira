<?php
if (isset($_POST['peminjaman'])) {

    if ($_POST['Waktu_kembali'] != "") {
        require "koneksi.php";
        require "session.php";
        $brg = $_POST['brg'];

        // cek apakah barang apakah sudah di pinjam atau belum, status 2 menandakan barang tersebut sudah dipinjam
        $select_id_barang = mysqli_query($conn, "SELECT * FROM tb_peminjaman WHERE Barang = '$brg' && (Status = '2')");
        $hasil_barang = mysqli_fetch_array($select_id_barang);

        if (isset($hasil_barang['Barang'])) {
            echo '<script>alert("Peminjaman barang gagal, barang sudah di pinjam");</script>';
            echo '<script>window.location="../peminjaman";</script>';
        } else {
            $mk = $_POST['mk'];
            $username = $_SESSION['Username'];

            //ambil id_user dari tabel tb_user
            $select_id_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE Username = '$username'");

            if ($select_id_user) {
                $hasil_id = mysqli_fetch_array($select_id_user);
                $id = $hasil_id['id'];
                $waktu_pengembalian = $_POST['Waktu_kembali'];

                $pinjam = mysqli_query($conn, "INSERT INTO tb_peminjaman(Barang, User, Status, Waktu_kembali, Mata_kuliah) VALUES ('$brg', '$id', '1', '$waktu_pengembalian', '$mk')");

                if ($pinjam) {
                    echo '<script>alert("Peminjaman barang berhasil");</script>';
                    echo '<script>window.location="../peminjaman";</script>';
                } else {
                    echo 1;
                    echo '<script>alert("Peminjaman barang gagal, mohon kontak admin");</script>';
                    echo $_POST['Waktu_kembali'];
                    echo $waktu_pengembalian;
                    // echo '<script>window.location="../peminjaman";</script>';
                }
            } else {
                echo '<script>alert("Peminjaman barang gagal, mohon kontak admin");</script>';
                echo '<script>window.location="../peminjaman";</script>';
            }
        }
    } else {
        echo '<script>alert("Waktu Pengembalian harus diisi");</script>';
        echo '<script>window.location="../peminjaman";</script>';
    }
} else {
    echo '<script>alert("Peminjaman barang gagal, mohon kontak admin");</script>';
    echo '<script>window.location="../peminjaman";</script>';
}