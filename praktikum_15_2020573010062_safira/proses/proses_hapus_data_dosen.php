<?php
    require "koneksi.php";

    $id = $_POST['nip'];

        //Hapus data
        $update = mysqli_query($conn, "DELETE FROM tb_dosen WHERE NIP='$id'");
        if($update){
            echo "<script>window.location='../dosen';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
?>