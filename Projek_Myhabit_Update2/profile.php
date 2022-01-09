<?php
require "proses/session.php";
$query = mysqli_query($conn, "SELECT*FROM tb_user WHERE username='$_SESSION[username]'");
$data = mysqli_fetch_array($query)
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css" />
    <title></title>
</head>

<body>
<div class="d-flex" id="wrapper">
    <!-- Sidbar -->
        <?php require "sidebar.php";?>
    <!-- Akhir Sidebar -->
    <!-- Header -->
        <div id="page-content-wrapper">
        <?php require "header.php" ?>
    <!-- Akhir Header -->
        <!-- Isi Konten -->
        
    <div class="container-fluid">
        <h3> Profile </h3>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input type="text" class="form-control"value="<?php echo "$data[username]"; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" value="<?php echo "$data[password]"; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                        <input type="email" class="form-control" value="<?php echo "$data[level]"; ?>" disabled>
                    </div>

                </form>
            </div>
     </div>
        </div>
    <!-- Akhir Isi Konten -->

</body>
</html>