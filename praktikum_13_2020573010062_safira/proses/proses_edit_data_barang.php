<?php
    require "koneksi.php";

    $id = $_POST['id'];
    $nm_barang = $_POST['nm_barang'];
    $ket_barang = $_POST['ket_barang'];

        //update data
        $update = mysqli_query($conn, "UPDATE tb_barang SET Nama='$nm_barang' WHERE Kode_barang='$id'");
        if($update){
            echo "<script>window.location='../barang';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
    // echo $nm_barang . "<br>";
    // echo $ket_barang . "<br>";
?>