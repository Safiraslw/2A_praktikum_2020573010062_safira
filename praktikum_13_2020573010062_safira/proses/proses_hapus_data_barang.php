<?php
    require "koneksi.php";

    $id = $_POST['id'];

        //Hapus data
        $update = mysqli_query($conn, "DELETE FROM tb_barang WHERE id='$id'");
        if($update){
            echo "<script>window.location='../barang';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
    // echo $nm_barang . "<br>";
    // echo $ket_barang . "<br>";
?>