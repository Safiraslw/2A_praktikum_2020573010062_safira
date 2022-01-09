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
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidbar -->
        <?php
        require "sidebar.php";
        ?>
        <!-- Akhir Sidebar -->
        <!-- Isi Konten -->
        <div id="page-content-wrapper">
            <?php require "header.php" ?>

            <div class="container-fluid">
                <h1 class="ms-4">Hello Buddy</h1>
                <div class="row">
                    <div class="col-6">
                        <h6 class="ms-4 font-weight-bold text-dark">How's your day?</h6>
                        <div class="ms-4 me-2 progress mb-3 mt-3">
                            <div class="progress-bar progress-bar-striped bg-secondary progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="">
                                <h6 class="mt-2 ms-4 font-weight-bold text-dark">What to do now?</h6>
                                <div class="ms-4 card shadow" style="background-color: #336666;">
                                    <div class="card-body">
                                        <div class="form-check mt-md-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                04.30 Take a shower
                                            </label>
                                        </div>
                                        <div class="form-check mt-md-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                05.00 Sholat subuh
                                            </label>
                                        </div>
                                        <div class="form-check mt-md-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                05.10 Read the holy Al-quran
                                            </label>
                                        </div>
                                        <div class="form-check mt-md-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                05.30 Cook a breakfast
                                            </label>
                                        </div>
                                        <div class="form-check mt-md-4 mb-md-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                06.00 Have a breakfast
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-6">
                        <h6 class="ms-4 font-weight-bold text-dark">Your progress</h6>
                        <div class="ms-4 me-5 card shadow" style="background-color: #336666;">
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-2 small">
                                    <h6 class="font-weight-bold text-dark">Great! Keep it up</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Pie chart End -->
                        <div class="row mt-2">
                            <div class="">
                                <h6 class="mt-2 ms-4 font-weight-bold text-dark">Motivation of the day</h6>
                                <div class="ms-4 me-5 card shadow" style="background-color: #336666;">
                                    <label class="mt-2 ms-2 mb-1">"Don't push yourself to hard"</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="">
                                <h6 class="mt-2 ms-4 font-weight-bold text-dark">Your mood tracker</h6>
                                <div class="ms-4 me-5 card shadow" style="background-color: #336666;">
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                    <div class="progress mt-2 mb-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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