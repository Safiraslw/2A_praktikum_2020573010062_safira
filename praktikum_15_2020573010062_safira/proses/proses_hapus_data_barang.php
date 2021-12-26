<?php
    require "koneksi.php";

    $id = $_POST['id'];

        //Hapus data
        $update = mysqli_query($conn, "DELETE FROM tb_barang WHERE Kode_barang='$id'");
        if($update){
            echo "<script>window.location='../barang';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
?>