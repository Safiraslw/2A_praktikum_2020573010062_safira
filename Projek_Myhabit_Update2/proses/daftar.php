    <?php
    require "koneksi.php";

    $username   = $_POST['username'];
    $pass       = md5($_POST["pass"]);
    $konf       = md5($_POST['konf']);
    // $level      = $_POST['level'];


    if(empty($_POST['username'])||empty($_POST['pass'])||empty($_POST['konf'])){
        echo "<script>alert('Form tidak boleh kosong');</script>";
        echo "<script> window.location='../sign-in/sign_up.php';</script>";
    }elseif($pass != $konf){
        echo "<script>alert('Password tidak sama');</script>";
        echo "<script> window.location='../sign-in/sign_up.php';</script>";
    }else{
        $query = mysqli_query($conn, "SELECT username FROM tb_user WHERE username= '$username'");
        $hasil = mysqli_fetch_array($query);

        if(isset($hasil['username'])){
            echo "<script>alert('Akun sudah ada');</script>";
            echo "<script> window.location='../sign-in/sign_up.php';</script>";   
        }else{
            $sql = mysqli_query($conn, "INSERT INTO tb_user(username, password, level) 
            VALUES ('$username', '$pass', 'user')");
            if($sql){
                echo "<script>alert('Akun berhasil dibuat');</script>";
                echo "<script> window.location='../sign-in/';</script>";
            }else{
                echo "<script>alert('Akun gagal dibuat');</script>";
                echo "<script> window.location='../sign-in/sign_up.php';</script>";
            }
        }
    }

    ?>