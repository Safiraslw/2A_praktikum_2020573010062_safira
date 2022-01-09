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
                <h3>If You Need Some Tips</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="ms-2 mt-4 me-4 mb-lg-3" style="text-align:right;"><img src="images/kantor.png" style="float: left; width: 10rem;" alt="">
                            Membuatnya terlihat</h3>
                        <h6 class="me-4">
                            <p style="text-align:right;">Untuk memastikan kegiatan yang yang</p>
                        </h6>
                        <h6 class="me-4">
                            <p style="text-align:right;">direncanakan terlaksana,</p>
                        </h6>
                        <h6 class="me-4">
                            <p style="text-align:right;">buat ia terlihat.</p>
                        </h6>
                        <div class="row mt-2">
                            <div class="">
                                <h3 class="mt-2 me-4 mb-2" style="text-align:left;"><img src="images/trampolin.png" style="float: right; width: 9rem;" alt="">
                                    Membuatnya menarik</h3>
                                <h6>
                                    <p style="text-align:left;">Pasangkan aksi yang ingin dilakukan</p>
                                </h6>
                                <h6>
                                    <p style="text-align:left;">dengan yang perlu dilakukan, agar</p>
                                </h6>
                                <h6>
                                    <p style="text-align:left;">kegiatan menjadi lebih menarik.</p>
                                </h6>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="">
                                <h3 class="ms-2 mt-2 me-4" style="text-align:right;">
                                    <img src="images/man.png" style="float: left; width: 5rem;" alt="">
                                    Membuatnya mudah
                                </h3>
                                <h6 class="me-4">
                                    <p style="text-align:right;">Kurangi jumlah tahapan kegiatan</p>
                                </h6>
                                <h6 class="me-4">
                                    <p style="text-align:right;">untuk mengurangi hambatan</p>
                                </h6>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="">
                                <h3 class="mt-2 me-2" style="text-align:left;">
                                    <img src="images/happy.png" style="float: right; width: 9rem;" alt="">
                                    Membuatnya memuaskan
                                </h3>
                                <h6>
                                    <p style="text-align:left;">Secara psikologi, apa yang membuat</p>
                                </h6>
                                <h6>
                                    <p style="text-align:left;">kita puas akan kita ulangi</p>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ms-4 me-5 card shadow" style="background-color: #336666;">
                            <h3 class="mt-2 ms-2 mb-xl-4 font-weight-bold text-light">Another Tips</h3>
                            <label class="mt-2 ms-4 mb-3 text-light">
                                <a href="tips1.php" style="text-decoration: none; color:#ffffff;">How to make it easy?</a>
                            </label>
                            <label class="ms-4 mb-3 text-light">
                                <a href="motivasi1.php" style="text-decoration: none; color:#ffffff;">How to make it attractive?</a>
                            </label>
                            <label class="ms-4 mb-3 text-light">
                                <a href="motivasi1.php" style="text-decoration: none; color:#ffffff;">How to make it obvious?</a>
                            </label>
                            <label class="ms-4 mb-xl-5 text-light">
                                <a href="motivasi1.php" style="text-decoration: none; color:#ffffff;">How to make it Statisfy?</a>
                            </label>
                            <div class="footer">
                            <?php if ($row['level'] == 'admin') { ?>
                                <button type="button" class="btn btn-light float-start ms-4 mt-4 mb-3" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                    Add new
                                </button>
                                <?php } ?>
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