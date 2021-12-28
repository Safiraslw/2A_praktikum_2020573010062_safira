<?php
require "proses/session.php";
$select = mysqli_query($conn, "SELECT * FROM tb_dosen");
// $query = mysqli_fetch_array($select);
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
    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <?php
        require "header.php";
        ?>
        <!-- Akhir Header -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <!-- Sidebar -->
                    <?php
                    require "sidebar.php";
                    ?>
                    <!-- Akhir Sidebar -->
                </div>
                <!-- Isi Konten -->
                <div class="col-9 mt-3">
                    <h4>Data Dosen</h4>
                    <hr>
                    <div class="card mt-4">
                        <h5 class="card-header" style="background-color:#ffc0cb;">Data Informasi Dosen</h5>
                        <div class="card-body">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahdatadosen">
                                Tambah Data Dosen
                            </button>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tgl Lahir</th>
                                        <?php
                                        if ($row["Level"] == 'Admin') {
                                        ?>
                                            <th scope="col">Aksi</th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    while ($hasil = mysqli_fetch_array($select)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $no ?></th>
                                            <td><?php echo $hasil['NIP'] . "<br>"; ?></td>
                                            <td><?php echo $hasil['Dosen'] . "<br>"; ?></td>
                                            <td><?php echo $hasil['Prodi'] . "<br>"; ?></td>
                                            <td><?php echo $hasil['Alamat'] . "<br>"; ?></td>
                                            <td><?php echo $hasil['Tanggal_Lahir'] . "<br>"; ?></td>
                                            <td>
                                                <?php
                                                if ($row["Level"] == 'Admin') {
                                                ?>
                                                    <button data-bs-toggle="modal" data-bs-target="#modaledit<?php echo $no ?>" type="button" class="btn btn-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#modaldelete<?php echo $no ?>" type="button" class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                    </button>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="modaledit<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="proses/proses_edit_data_dosen.php">
                                                        <input type="hidden" name="nip" value="<?php echo $hasil['NIP'] ?>">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama :</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="nm_dosen" value="<?php echo $hasil['Dosen']; ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Prodi :</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="prodi" value="<?php echo $hasil['Prodi'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Alamat :</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="alamat" value="<?php echo $hasil['Alamat'] ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Modal Edit -->
                                        <!-- Modal Delete-->
                                        <div class="modal fade" id="modaldelete<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="proses/proses_hapus_data_dosen.php">
                                                        <input type="hidden" name="nip" value="<?php echo $hasil['NIP'] ?>">
                                                        <div class="modal-body">
                                                            Yakin ingin menghapus <?php echo $hasil['Nama']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Modal Delete -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Akhir Isi Konten -->

                <!-- Modal Tambah-->
                <div class="modal fade" id="tambahdatadosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="proses/proses_tambah_data_dosen.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">NIP :</label>
                                        <input type="number" class="form-control" id="recipient-name" name="nip">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama :</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nm_dosen">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Prodi :</label>
                                        <input type="text" class="form-control" id="recipient-name" name="prodi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Alamat :</label>
                                        <input type="text" class="form-control" id="recipient-name" name="alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Tanggal Lahir :</label>
                                        <input type="date" class="form-control" id="recipient-name" name="tgl_lhr">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Tempat Lahir :</label>
                                        <input type="textr" class="form-control" id="recipient-name" name="tmp_lhr">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" name="tmbl">Simpan</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir modal tambah -->
            </div>
        </div>
    </div>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>