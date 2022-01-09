<?php

session_start();

    require "koneksi.php";
    
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
   

    $hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' 
    && password='$password'");
    $row = mysqli_fetch_array($hasil);
    if ($hasil) {
        if (isset ($row['username']) && isset ($row['password']) 
        && $row['username'] == $username && $row['password'] == $password) {
          $_SESSION ['username']= $row['username']; 
          echo "<script> window.location='../dashboard.php';</script>";

            // header("Location: ../mainmenu.php");
        }
        else
        {
            echo "<script>alert('Gagal Login');</script>";
            echo "<script> window.location='../sign-in';</script>";
            //header("Location: ../sign-in/index.php");
        }
    }
?>