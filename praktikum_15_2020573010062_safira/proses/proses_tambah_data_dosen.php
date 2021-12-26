<?php
require "koneksi.php";

    $nip        = $_POST['nip'];
    $nm_dosen   = $_POST['nm_dosen'];
    $prodi      = $_POST['prodi'];
    $alamat     = $_POST['alamat'];
    $tgl_lahir  = $_POST['tgl_lhr'];
    $tmp_lahir  = $_POST['tmp_lhr'];

    if(empty($nip) || $nip == ""){
        echo "<script>alert('Data tidak boleh kosong')</script>";
        echo "<script>window.location='../dosen';</script>";
    }else{
        $select = mysqli_query($conn, "SELECT NIP FROM tb_dosen WHERE NIP='$nip'");
        
        $hasil = mysqli_fetch_array($select);
        if(isset($hasil['NIP'])){
            echo "<script>alert('Data kode barang telah ada')</script>";
            echo "<script>window.location='../dosen';</script>";
        }else{
            $sql    = mysqli_query($conn, "INSERT INTO tb_dosen (NIP,Nama,Prodi,Alamat,Tanggal_Lahir,Tempat_lahir)
            VALUES ('$nip', '$nm_dosen','$prodi', '$alamat', '$tgl_lahir', '$tmp_lahir')");
            if($sql){
                echo "<script>alert('Data berhasil ditambah')</script>";
                echo "<script>window.location='../dosen';</script>";
            }else {
                echo "<script>alert('Data tidak berhasil ditambah')</script>";
                echo "<script>window.location='../dosen';</script>";
            }
        }
    }
?>