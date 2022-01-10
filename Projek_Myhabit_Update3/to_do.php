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
                <h1 class="ms-4">Daily Plan</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="ms-4 card shadow" style="background-color: #336666;">
                            <div class="card-body">
                                <form action="proses_tambah_todolist.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $sql['id'] ?>">
                                    <label for="Tanggal">Day</label>
                                    <input type="date" id="Tanggal" name="tanggal">
                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">check</th>
                                                <th scope="col" class="text-center">Time</th>
                                                <th scope="col" class="text-center">Plan</th>
                                                <th scope="col" class="text-center">Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                                                <td>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                        <option selected></option>
                                                        <option value="1">Habit</option>
                                                        <option value="2">To do</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <button type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </button>
                                <div class="footer">
                                    <button type="button" class="btn btn-danger float-end mt-lg-4" data-dismiss="modal">Done</button>
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
                                    <h6 class="font-weight-bold text-light">Great! Keep it up</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="">
                                <div class="ms-4 me-5 card shadow" style="background-color: #336666;">
                                    <h3 class="mt-2 ms-4 font-weight-bold text-light">Tips!</h3>
                                    <label class="mt-2 ms-4 text-light">1. Make it Obvious</label>
                                    <label class="ms-4 text-light">2. Make it Atractive</label>
                                    <label class="ms-4 text-light">3. Make it Easy</label>
                                    <label class="ms-4 mb-5 text-light">4. Make it Statisfying</label>
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