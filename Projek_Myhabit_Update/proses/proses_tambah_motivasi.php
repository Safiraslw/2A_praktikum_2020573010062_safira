<?php
$conn=mysqli_connect("localhost", "root", "", "myhabit") 
or die ("Koneksi gagal");

$judul      = $_POST['judul'];
$konten     = $_POST['isi'];
$kredit     = $_POST['kredit'];
$id         = $_POST['id'];

        $select = mysqli_query($conn, "SELECT judul FROM tb_motivasi WHERE judul=$judul");
        
        $hasil = mysqli_fetch_array($select);
        if(isset($hasil['judul'])){
            echo "<script>alert('Data id telah ada')</script>";
            echo "<script>window.location='../motivasi_adm.php';</script>";
        }else{
            $sql    = mysqli_query($conn, "INSERT INTO tb_motivasi (judul,content,credit)
            VALUES ('$judul','$konten','$kredit')");
            if($sql){
                echo "<script>alert('Data berhasil ditambah')</script>";
                echo "<script>window.location='../barang';</script>";
            }else {
                echo "<script>alert('Data tidak berhasil ditambah')</script>";
                echo "<script>window.location='../barang';</script>";
            }
        }
?>