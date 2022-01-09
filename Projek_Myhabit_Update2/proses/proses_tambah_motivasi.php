<?php
require "koneksi.php";

$judul      = $_POST['judul'];
$isi        = $_POST['isi'];
$kredit     = $_POST['cr'];
$kategori   = $_POST['kategori'];


$sql    = mysqli_query($conn, "INSERT INTO tb_motivasi (judul,isi,cr,kategori) VALUES ('$judul','$isi','$kredit','$kategori')");
     if($sql){
           echo "<script>alert('Terimakasih semangatnya!!')</script>";
           echo "<script>window.location='../form_motivation.php';</script>";
     }else {
           echo "<script>alert('Yahhhh Gagal :( Yuk coba lagi!')</script>";
           echo "<script>window.location='../form_motivation.php';</script>";
           }

?>