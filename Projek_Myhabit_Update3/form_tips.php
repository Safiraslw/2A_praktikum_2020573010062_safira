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
        require "sidebar.php";
        ?>
        <!-- Akhir Sidebar -->
        <!-- Isi Konten -->
        <div id="page-content-wrapper">
            <?php require "header.php"; ?>
            <div class="container-fluid">
                <h2>Creat the Daily Tips</h2>
                <div class="row">
                    <div class="col-6">
                        <form class="mt-4" action="proses/proses_tambah_tips.php" method="POST">
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
                                <input type="text" name="cr" class="form-control" style="background-color: #A9BA9D;">
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