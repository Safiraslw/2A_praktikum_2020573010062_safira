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
                <h2>Your daily Motivations</h2>
                <div class="row mt-lg-5">
                    <div class="col-sm-6">
                        <div class="card" style="background-color: #336666;">
                            <h5 class="ms-2 mt-4 me-4 mb-lg-3" style="text-align:center;"><img src="images/tired.png" style="float: left; width: 5rem;" alt="">
                                <a href="konten_motivasi1.php" style="text-decoration: none; color:#000000;">When you feel tired</a>
                            </h5>
                            <div class="footer mb-2">
                                <?php if ($row['level'] == 'admin') { ?>
                                    <a href="form_motivation.php" class="btn btn-outline-light float-end me-2 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mt-lg-5">
                            <div class="">
                                <div class="card" style="background-color: #336666;">
                                    <h5 class="ms-2 mt-4 me-4 mb-2" style="text-align:center;"><img src="images/lonely.png" style="float: left; width: 7rem;" alt="">
                                        <a href="konten_motivasi2.php" style="text-decoration: none; color:#000000;"> When you feel sad</a>
                                    </h5>
                                    <div class="footer">
                                        <?php if ($row['level'] == 'admin') { ?>
                                            <a href="form_motivation.php" class="btn btn-outline-light float-end me-2 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="background-color: #336666;">
                            <h5 class="ms-2 mt-4 me-4" style="text-align:center;"><img src="images/scare.png" style="float: left; width: 5rem;" alt="">
                                <a href="konten_motivasi3.php" style="text-decoration: none; color:#000000;">When you feel scare</a>
                            </h5>
                            <div class="footer">
                                <?php if ($row['level'] == 'admin') { ?>
                                    <a href="form_motivation.php" class="btn btn-outline-light float-end me-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row mt-lg-5">
                            <div class="">
                                <div class="card" style="background-color: #336666;">
                                    <h5 class="ms-2 mt-4 me-4" style="text-align:center;"><img src="images/overthinking.png" style="float: left; width: 5rem;" alt="">
                                        <a href="konten_motivasi4.php" style="text-decoration: none; color:#000000;">When you feel overthinking</a>
                                    </h5>
                                    <div class="footer">
                                        <?php if ($row['level'] == 'admin') { ?>
                                            <a href="form_motivation.php" class="btn btn-outline-light float-end me-2 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg>
                                            </a>
                                        <?php } ?>
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