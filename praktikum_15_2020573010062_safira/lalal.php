<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="proses/proses_tambah_barang.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                        <select name="barang" class="form-select" aria-label="Default select example">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM barang");
                            while ($hasil1 = mysqli_fetch_array($query)) {
                                echo "<option value=''>" . $hasil1['kode_barang'] . "-" . $hasil1['nama_barang'] . "</option>";
                            }
                            ?>
                        </select>
                    <div class="mb-1">
                        <label for="nama_barang" class="col-form-label">Mata Kuliah:</label>
                            <select name="barang" class="form-select" aria-label="Default select example">
                                <?php
                                $query1 = mysqli_query($conn, "SELECT * FROM tb_matakuliah mk 
                                                        LEFT JOIN tb_dosen dos ON mk.dosen = dos.nip");
                                while ($hasil2 = mysqli_fetch_array($query1)) {
                                    echo "<option value=''>" . $hasil2['kode_matakuliah'] . "-" . $hasil2['nm_matakuliah'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal tambah -->