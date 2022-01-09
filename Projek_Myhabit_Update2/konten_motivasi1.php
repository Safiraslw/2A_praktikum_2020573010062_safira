<?php
require "proses/session.php";
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
                <h2>READ THIS! When You Feel Tired</h2>
                
        <div class="col-9">
            <div class="card">
            <h5 class="card-header">It's normal to being tired</h5>
            <div class="card-body">
            <p class="card-text">
                Accept how you feel and dont hide from It, so that you can deal with what's real & heal from it.
            </p>
            </div>
        </div>
        <br>
        <div class="col-9">
            <div class="card">
            <h5 class="card-header">You're allowed</h5>
            <div class="card-body">
            <p class="card-text">
                If todau feels heavy and like too much to handle, remember that this is okay. You are allowed to feel exhausted. You are allowed to feel hopless. You are allowed to feel.
            </p>
            </div>
        </div>
    <!-- Akhir Isi Konten -->
        </div>

</body>
</html>