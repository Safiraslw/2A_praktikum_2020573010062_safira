<?php
    require "koneksi.php";

    $id = $_POST['nim'];

        //Hapus data
        $update = mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE NIM='$id'");
        if($update){
            echo "<script>window.location='../mhs';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
        }
?>