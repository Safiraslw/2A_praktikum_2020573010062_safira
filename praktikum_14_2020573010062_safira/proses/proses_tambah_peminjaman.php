<?php
session_start();
require "koneksi.php";
$brg    = $_POST['brg'];
$mk     = $_POST['mk'];
if (empty($_POST['wkt_kembali'])) {
    echo "<script>alert('Waktu pengembalian harus diisi')</script>";
    echo "<script>window.location = '../peminjaman'</script>";
} else {
    $wkt_kembali = $_POST['wkt_kembali'];
}

$select     = mysqli_query($conn, "SELECT id FROM tb_user WHERE Username='$_SESSION[Username]'");
$hasilnya   = mysqli_fetch_array($select);
if ($hasilnya) {
    $select1     = mysqli_query($conn, "SELECT barang FROM tb_peminjaman WHERE Barang=$brg && (Status=1 || Status=2)");
    $hasilnya1   = mysqli_fetch_array($select1);
    if ($hasilnya1) {
        echo "<script>alert('Peminjaman Gagal ditambahkan, barang telah dipinjam')</script>";
        echo "<script>window.location = '../peminjaman'</script>";
    } else {
        $input  = mysqli_query($conn, "INSERT INTO tb_peminjaman (Barang,User,Status,Mata_kuliah,Waktu_kembali) VALUES($brg,$hasilnya[id],1,'$mk','$wkt_kembali')");
        if ($input) {
            echo "<script>alert('Peminjaman berhasil ditambahkan')</script>";
            echo "<script>window.location = '../peminjaman'</script>";
        } else {
            echo "<script>alert('Peminjaman gagal ditambahkan')</script>";
            echo "<script>window.location = '../peminjaman'</script>";
        }
    }
} else {
    echo "<script>alert('Peminjaman gagal ditambahkan')</script>";
    echo "<script>window.location = '../peminjaman'</script>";
}