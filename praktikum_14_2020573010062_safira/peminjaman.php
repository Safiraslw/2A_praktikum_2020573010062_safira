<?php
require "proses/session.php";
// Query untuk tabel hasil tambah peminjaman 
$select = mysqli_query($conn, "SELECT * FROM tb_peminjaman pem
LEFT JOIN tb_barang brg ON pem.Barang=brg.Kode_barang
LEFT JOIN tb_matakuliah mk ON pem.Mata_kuliah=mk.Kode_Matakuliah
LEFT JOIN tb_dosen dos ON mk.Dosen=dos.NIP
LEFT JOIN tb_user usr ON pem.User=usr.id
WHERE Username='$_SESSION[Username]'");
// Akhir query untuk tabel hasil tambah peminjaman 

$sql = mysqli_query($conn, "SELECT * FROM tb_peminjaman pem
RIGHT JOIN tb_barang brg ON pem.Barang=brg.Kode_barang
LEFT JOIN tb_mahasiswa mhs ON pem.User = mhs.id_user
LEFT JOIN tb_matakuliah mk ON pem.Mata_kuliah=mk.Kode_Matakuliah
LEFT JOIN tb_dosen dos ON mk.Dosen=dos.NIP");
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
                    <h4>Data Barang</h4>
                    <hr>
                    <div class="card mt-4">
                        <h5 class="card-header" style="background-color:#ffc0cb;">Data Informasi Barang</h5>
                        <div class="card-body">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahpeminjaman">
                                Tambah Peminjaman
                            </button>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#listpeminjaman">
                                List Peminjaman
                            </button>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Waktu Peminjaman</th>
                                        <th scope="col">Waktu Pengembalian</th>
                                        <th scope="col">Matakuliah</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    while ($hasil = mysqli_fetch_array($select)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td scope="row"><?php echo $no ?></td>
                                            <td><?php echo $hasil['Kode_barang']; ?></td>
                                            <td><?php echo "<img src='Images/Barang/$hasil[Gambar]' width='70' height='50'>"; ?></td>
                                            <td><?php echo $hasil['Nama']; ?></td>
                                            <td><?php echo $hasil['Keterangan']; ?></td>
                                            <td><?php echo date("d-m-Y H:i:s", strtotime($hasil['Waktu_pinjam'])); ?></td>
                                            <td><?php echo date("d-m-Y H:i:s", strtotime($hasil['Waktu_kembali'])); ?></td>
                                            <td><?php echo $hasil['nm_Matakuliah'] . " - " . $hasil['Dosen']; ?></td>
                                            <td>
                                                <?php
                                                if ($hasil['Status'] == 1) echo "<span class='badge bg-secondary'>Pending</span>";
                                                elseif ($hasil['Status'] == 2) echo "<span class='badge bg-success'>Disetujui</span>";
                                                elseif ($hasil['Status'] == 3) echo "<span class='badge bg-danger'>Ditolak</span>";
                                                elseif ($hasil['Status'] == 4) echo "<span class='badge bg-primary'>Telah Dikembalikan</span>";
                                                elseif ($hasil['Status'] == 5) echo "<span class='badge bg-warning'>Proses Dikembalikan</span>";
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($hasil['Status'] == 1) {
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
                                                } elseif ($hasil['Status'] == 2) {
                                                ?>
                                                    <button data-bs-toggle="modal" data-bs-target="#kembalikan<?php echo $no ?>" type="button" class="btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shift" viewBox="0 0 16 16">
                                                            <path d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047zM14.346 9.5 8 2.731 1.654 9.5H4.5a1 1 0 0 1 1 1v3h5v-3a1 1 0 0 1 1-1h2.846z" />
                                                        </svg>
                                                    </button>
                                                <?php } ?>
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
                                                    <form method="POST" action="proses/proses_edit_data_barang.php">
                                                        <input type="hidden" name="id" value="<?php echo $hasil['Kode_barang'] ?>">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama Barang :</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="nm_barang" value="<?php echo $hasil['Nama']; ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Keterangan :</label>
                                                                <input type="text" class="form-control" id="recipient-name" name="ket_barang" value="<?php echo $hasil['Keterangan'] ?>">
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
                                        <!-- Akhir Modal Edit-->

                                        <!-- Modal Kembalikan-->
                                        <div class="modal fade" id="kembalikan<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Persetujuan Pinjaman Barang</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="proses/proses_kembalikan_peminjaman.php">
                                                        <div class="modal-body">
                                                            <input name="id_peminjaman" type="hidden" value="<?php echo $hasil['id_peminjaman'] ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama Barang</label>
                                                                <input type="text" class="form-control" value="<?php echo $hasil['Kode_barang'] . " - " . $hasil['Nama'] . " " . $hasil['Keterangan'] ?>" disabled>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Matakuliah</label>
                                                                <input type="text" class="form-control" value="<?php echo $hasil['nm_Matakuliah'] . " - " . $hasil['Dosen'] ?>" disabled>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Waktu Peminjaman s/d Waktu Pengembalian</label>
                                                                <input type="text" class="form-control" value="<?php echo date("d-m-Y H:i:s", strtotime($hasil['Waktu_pinjam'])) . " s/d " . date("d-m-Y H:i:s", strtotime($hasil['Waktu_kembali'])) ?>" disabled>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Kembalikan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Modal Kembalikan-->

                                        <!-- Modal Delete-->
                                        <div class="modal fade" id="modaldelete<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form method="POST" action="proses/proses_hapus_data_barang.php">
                                                        <input type="hidden" name="id" value="<?php echo $hasil['Kode_barang'] ?>">
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
                                        <!-- Akhir Modal Delete-->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Akhir Isi Konten -->

                <!-- Modal Tambah Peminjaman-->
                <div class="modal fade" id="tambahpeminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="proses/proses_tambah_peminjaman.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Barang</label>
                                        <select name="brg" class="form-select" aria-label="Default select example">
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tb_barang");
                                            while ($hasil1 = mysqli_fetch_array($query)) {
                                                echo "<option value='$hasil1[Kode_barang]'>" . $hasil1['Kode_barang'] . " " . $hasil1['Nama'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Matakuliah</label>
                                        <select name="mk" class="form-select" aria-label="Default select example">
                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM tb_matakuliah mk
                                        LEFT JOIN tb_dosen dos ON mk.Dosen=dos.NIP");
                                            while ($hasil1 = mysqli_fetch_array($query)) {
                                                echo "<option value='$hasil1[Kode_Matakuliah]'>" . $hasil1['Kode_Matakuliah'] . " " . $hasil1['nm_Mtakuliah'] . " - " . $hasil1['Dosen'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Waktu Pengembalian</label>
                                        <input name="wkt_kembali" type="datetime-local" class="form-control" value="<?php echo date("d/m/Y H.i", strtotime($hasil['Waktu_kembali'])) ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Tambah Peminjaman-->

                <!-- Modal List Peminjaman-->
                <div class="modal fade" id="listpeminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">List Peminjaman</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Barang</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Peminjam</th>
                                            <th scope="col">Waktu Peminjaman</th>
                                            <th scope="col">Waktu Pengembalian</th>
                                            <th scope="col">Matakuliah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        while ($hasil = mysqli_fetch_array($sql)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td scope="row"><?php echo $no ?></td>
                                                <td><?php echo $hasil['Kode_barang']; ?></td>
                                                <td><?php echo $hasil['Nama']; ?></td>
                                                <td><?php
                                                    if ($hasil['Status'] == '1') {
                                                        $status = 'Pending';
                                                    } elseif ($hasil['Status'] == '2') {
                                                        $status = 'Disetujui';
                                                    } elseif ($hasil['Status'] == '3') {
                                                        $status = 'Ditolak';
                                                    } elseif ($hasil['Status'] == '3') {
                                                        $status = 'Telah Dikembalikan';
                                                    } else {
                                                        $status = 'Proses Dikembalikan';
                                                    }
                                                    echo $status;
                                                    ?></td>
                                                <td>
                                                    <?php echo $hasil['Nama_Mhs'] . "<br>"; ?>
                                                    <?php echo $hasil['Kelas'] . "<br>"; ?>
                                                    <?php echo $hasil['Prodi'] . "<br>"; ?>
                                                </td>
                                                <td>
                                                    <?php echo $hasil['Waktu_pinjam'] . "<br>"; ?>
                                                </td>
                                                <td>
                                                    <?php echo $hasil['Waktu_kembali'] . "<br>"; ?>
                                                </td>
                                                <td>
                                                    <?php echo $hasil['nm_Matakuliah'] . "<br>"; ?>
                                                    <?php echo "(" . $hasil['Dosen'] . ")<br>"; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal List Peminjaman-->

            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>