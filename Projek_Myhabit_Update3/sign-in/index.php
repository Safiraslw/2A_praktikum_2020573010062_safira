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

  <div class="col-9">

    <main class="form-signin">

      <form action="../proses/proses_login.php" method="POST">

        <h1 class="h3 mb-3 fw-normal">My Habit!</h1>



        <div class="form-floating">

          <input type="email" class="form-control" name="username" style="background-color: #8CA19E;" placeholder="name@example.com" require>

          <label for="floatingInput">Email address</label>

        </div>

        <br>

        <div class="form-floating">

          <input type="password" class="form-control" name="password" style="background-color: #8CA19E;" placeholder="Password" require>

          <label for="floatingPassword">Password</label>

        </div>

        <div class="question text-start">

          <a href="sign_up.php">Belum punya akun?</a>

        </div>



        <div class="checkbox mb-3">

          <label>

            <input type="checkbox" value="remember-me"> Remember me

          </label>

        </div>

        <button class="w-50 btn btn-md" type="submit" style="background-color : #ffffff">Login</button>

      </form>

    </main>

  </div>

  <!-- Akhir Login -->







</body>



</html>