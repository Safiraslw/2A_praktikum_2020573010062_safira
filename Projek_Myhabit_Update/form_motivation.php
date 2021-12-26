<?php
require "proses/session.php"
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
        <?php
        require "sidebar_adm.php";
        ?>
        <!-- Akhir Sidebar -->
        <!-- Isi Konten -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/Safiraslw.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>Safira Salwa</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h2>Creat the Daily Motivations</h2>
                <div class="row">
                    <div class="col-6">
                        <form class="mt-4" action="proses_tambah_motivasi.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">
                                    <h6>Title</h6>
                                </label>
                                <input type="text" name="judul" class="form-control" style="background-color: #A9BA9D;">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    <h6>Content</h6>
                                </label>
                                <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3" style="background-color: #A9BA9D;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    <h6>Credit</h6>
                                </label>
                                <input type="text" name="kredit" class="form-control" style="background-color: #A9BA9D;">
                            </div>
                            <button type="submit" class="btn btn-danger mt-5">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Akhir Isi Konten -->
        </div>

        <!-- Page level plugins -->
        <script src="JavaScript/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="JavaScript/chart-pie-demo.js"></script>
</body>

</html>