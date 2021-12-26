<?php

session_start();
require "koneksi.php";
$brg = $_POST['brg'];
$mk = $_POST['mk'];

$select = mysqli_query($conn, "SELECT id FROM tb_user WHERE Username='$_SESSION(Username)'");

$hasil = mysqli_fetch_array($select);
if ($hasil) {
    $select1 = mysqli_query($conn, "SELECT Barang FROM tb_peminjaman WHERE Barang='$brg'");
    $hasil1 = mysqli_fetch_array($select1);
    if ($hasil1) {
        echo "<script>alert('Peminjaman gagal ditambahkan, barang telah dipinjam')</script>";
        echo "<script>window.location='../peminjaman';</script>";
    } else {
        $input    = mysqli_query($conn, "INSERT INTO tb_peminjaman (Barang,User,Status,Mata_kuliah)
        VALUES ($brg,$hasil(id),1,'$mk'");
        if ($input) {
            echo "<script>alert('Peminjaman berhasil ditambah')</script>";
            echo "<script>window.location='../peminjaman';</script>";
        } else {
            echo "<script>alert('Peminjaman tidak berhasil ditambah')</script>";
            echo "<script>window.location='../peminjaman';</script>";
        }
    }
} else {
    echo "<script>alert('Peminjaman gagal ditambah')</script>";
    echo "<script>window.location='../peminjaman';</script>";
}
