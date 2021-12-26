<?php
    require "koneksi.php";

    $id = $_POST['nip'];
    $nm_dosen = $_POST['nm_dosen'];

        //update data
        $update = mysqli_query($conn, "UPDATE tb_dosen SET Nama='$nm_dosen' WHERE NIP='$id'");
        if($update){
            echo "<script>window.location='../dosen';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
?>