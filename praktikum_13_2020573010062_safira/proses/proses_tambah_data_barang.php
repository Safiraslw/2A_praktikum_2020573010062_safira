<?php
require "koneksi.php";

    $kd_brg     = $_POST['kd_barang'];
    $nm_brg     = $_POST['nm_barang'];
    $ket_brg    = $_POST['ket_barang'];
    $stok       = $_POST['stok'];

    if(empty($kd_brg) || $kd_brg == ""){
        echo "<script>alert('Data tidak boleh kosong')</script>";
        echo "<script>window.location='../barang';</script>";
    }else{
        $select = mysqli_query($conn, "SELECT Kode_barang FROM tb_barang WHERE Kode_barang='$kd_brg'");
        
        $hasil = mysqli_fetch_array($select);
        if(isset($hasil['Kode_barang'])){
            echo "<script>alert('Data kode barang telah ada')</script>";
            echo "<script>window.location='../barang';</script>";
        }else{
            $sql    = mysqli_query($conn, "INSERT INTO tb_barang (Kode_barang,Nama,Keterangan,Stok)
            VALUES ('$kd_brg',' $nm_brg','$ket_brg',$stok)");
            if($sql){
                echo "<script>alert('Data berhasil ditambah')</script>";
                echo "<script>window.location='../barang';</script>";
            }else {
                echo "<script>alert('Data tidak berhasil ditambah')</script>";
                echo "<script>window.location='../barang';</script>";
            }
        }
    }
?>