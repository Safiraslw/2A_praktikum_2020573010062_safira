<?php
    require "koneksi.php";
    $username = $_POST["Username"];
    $password = md5($_POST["Password"]);
    // echo $username . " - " . $password. "<br>";

    $hasil = mysqli_query($conn, "select * from tb_user WHERE Username='$username' 
    && Password='$password'");
    $row = mysqli_fetch_array($hasil);
    if ($hasil) {
        if ((isset($row['Username']) && isset($row['Password']))
        && $row['Username'] == $username && $row['Password'] == $password) {
            header("Location: ../home.php");
        } else {
            header("Location: ../sign-in/form_signin.php");
        }
    }

    // echo "id adalah : "  .  $row["id"]. "<br>";
    // echo "Username adalah :  " .  $row["Username"]. "<br>";
    // echo "Password adalah : "  .  $row["Password"]. "<br>";
    // echo "Level adalah : "  .  $row["Level"]. "<br>";
?>