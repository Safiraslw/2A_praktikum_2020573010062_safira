<?php
    session_start();
    require "koneksi.php";
    if(empty($_SESSION['Username'])){
        echo "<script> window.location='sign-in/form_signin.php';</script>";
    }
?>