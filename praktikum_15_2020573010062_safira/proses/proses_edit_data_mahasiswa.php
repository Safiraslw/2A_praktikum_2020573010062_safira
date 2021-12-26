<?php
    require "koneksi.php";

    $id     = $_POST['nim'];
    $nm_mhs = $_POST['nm_mhs'];
    $prodi  = $_POST['prodi'];
    $alamat = $_POST['alamat'];

        //update data
        $update = mysqli_query($conn, "UPDATE tb_mahasiswa SET Nama='$nm_mhs',Prodi='$prodi',Alamat='$alamat' 
        WHERE NIM='$id'");
        if($update){
            echo "<script>window.location='../mhs';</script>";
        }else {
            echo "<script>alert('Data tidak berhasil diperbaharui')</script>";
            echo "<script>window.location='../mhs';</script>";
        }
?>