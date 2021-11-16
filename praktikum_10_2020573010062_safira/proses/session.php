<?php
    session_start();
    require "koneksi.php";
    if(empty($_SESSION['Username'])){
        echo "<script> window.location='sign-in/form_signin.php';</script>";
    }else{
     $hasil = mysqli_query($conn, "select * from tb_user WHERE Username='$_SESSION[Username]'");
     $row = mysqli_fetch_array($hasil);
    }
?>