<?php
require "koneksi.php";

    $nim        = $_POST['nim'];
    $nm_mhs     = $_POST['nm_mhs'];
    $kls        = $_POST['kls'];
    $prodi      = $_POST['prodi'];
    $alamat     = $_POST['alamat'];
    $tgl_lahir  = $_POST['tgl_lhr'];
    $tmp_lahir  = $_POST['tmp_lhr'];

    if(empty($nim) || $nim == ""){
        echo "<script>alert('Data tidak boleh kosong')</script>";
        echo "<script>window.location='../mhs';</script>";
    }else{
        $select = mysqli_query($conn, "SELECT NIM FROM tb_mahasiswa WHERE NIM='$nim'");
        
        $hasil = mysqli_fetch_array($select);
        if(isset($hasil['NIM'])){
            echo "<script>alert('Data NIM telah ada')</script>";
            echo "<script>window.location='../mhs';</script>";
        }else{
            $sql    = mysqli_query($conn, "INSERT INTO tb_mahasiswa (NIM,Nama,Kelas,Prodi,Alamat,Tgl_Lahir,Tempat_lahir)
            VALUES ('$nim', '$nm_mhs','$kls', '$prodi', '$alamat', '$tgl_lahir', '$tmp_lahir')");
            if($sql){
                echo "<script>alert('Data berhasil ditambah')</script>";
                echo "<script>window.location='../mhs';</script>";
            }else {
                echo "<script>alert('Data tidak berhasil ditambah')</script>";
                echo "<script>window.location='../mhs';</script>";
            }
        }
    }
?>