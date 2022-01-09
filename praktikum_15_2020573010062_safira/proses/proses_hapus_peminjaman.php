<?php
    require "koneksi.php";

    $id = $_POST['id'];

        //Hapus data
        $update = mysqli_query($conn, "DELETE FROM tb_peminjaman WHERE id_peminjaman='$id'");
        if($update){
            echo "<script>window.location='../peminjaman';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
?>