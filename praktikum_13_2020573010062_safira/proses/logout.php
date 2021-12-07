<?php
session_start();
    session_destroy();
    if(!empty($_SESSION['Username'])){
        session_destroy();
        echo "<script> window.location='../sign-in/form_signin.php';</script>";
    }else if(empty($_SESSION['Username'])) {
        echo "<script> window.location='../sign-in/form_signin.php';</script>";
    }
?>