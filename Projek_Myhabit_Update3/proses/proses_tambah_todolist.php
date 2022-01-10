<?php

$id         = $_POST['id'];
$tgl        = $_POST['tanggal'];
$check      = $_POST['check'];
$time       = $_POST['time'];
$plan       = $_POST['plan'];
$tipe       = $_POST['tipe'];

    $select = mysqli_query($conn, "SELECT id FROM tb_todo WHERE id='$id'");
        $hasil = mysqli_fetch_array($select);
        if(isset($hasil['id'])){
            echo "<script>alert('Data id telah ada')</script>";
            echo "<script>window.location='../to_do.php';</script>";
        }else{
            $sql    = mysqli_query($conn, "INSERT INTO tb_todo (id,tanggal,check,time,plan,type)
            VALUES ('$id', '$tgl','$check', '$time', '$plan', '$tipe')");
            if($sql){
                echo "<script>alert('Data berhasil ditambah')</script>";
                echo "<script>window.location='../to_do.php';</script>";
            }else {
                echo "<script>alert('Data tidak berhasil ditambah')</script>";
                echo "<script>window.location='../to_do.php';</script>";
            }
        }
