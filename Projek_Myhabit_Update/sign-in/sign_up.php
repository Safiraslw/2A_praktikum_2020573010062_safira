<?php
 require "../proses/session.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<!-- Awal template -->
<div class="sidebar">
  <div class="container-fluid">
        <div class="col-3">
        <?php
            require "side_template.php";
        ?>
        </div>
    </div>
  </div>
</div>
<!-- Akhir Template -->

<!-- Awal Login -->
<div class="col-9 text-start" style="padding: 5px;">
  <form action="../proses/daftar.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">My Habits!</h1>
    <div class="col-md-9">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="username" style="background-color: #8CA19E;">
  </div>
  <div class="col-md-9">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" style="background-color: #8CA19E;">
  </div>
  <div class="col-md-9">
    <label for="inputPassword4" class="form-label">Konfirmasi Password</label>
    <input type="password" class="form-control" name="konf" style="background-color: #8CA19E;">
  </div>
  <!-- <div class="col-md-9">
    <label for="inputPassword4" class="form-label">Level</label>
    <input type="text" class="form-control" name="level" id="user" value="user" style="background-color: #8CA19E;" disabled>
  </div> -->
    <div class="question text-start">
      <a href="index.php">Sudah punya akun?</a>
    </div>
    <br>
    <div class="col-9 text-center">
    <button class="w-20 btn btn-md" type="submit" style="background-color : #ffffff">Sign-Up</button>
  </div>
  </form>
</div>
<!-- Akhir Login -->


    
  </body>
</html>