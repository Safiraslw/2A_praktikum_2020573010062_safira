<?php
require "koneksi.php";

$judul      = $_POST['judul'];
$isi        = $_POST['isi'];
$kredit     = $_POST['cr'];

// echo $judul; echo $isi; echo $kredit; echo $kategori;

$sql    = mysqli_query($conn, "INSERT INTO tb_tips (judul,isi,cr) VALUES ('$judul','$isi','$kredit')");
     if($sql){
           echo "<script>alert('Terimakasih semangatnya!!')</script>";
           echo "<script>window.location='../form_tips.php';</script>";
     }else {
           echo "<script>alert('Yahhhh Gagal :( Yuk coba lagi!')</script>";
           echo "<script>window.location='../form_tips.php';</script>";
           }

?>