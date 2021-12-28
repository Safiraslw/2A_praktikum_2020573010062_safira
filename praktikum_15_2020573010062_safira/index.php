<?php
if (empty ($_GET['s'])){
    echo "<script> window.location='home';</script>";
}elseif ($_GET['s'] == 'home'){
    require "home.php";
}elseif ($_GET['s'] == 'peminjaman'){
    require "peminjaman.php";
}elseif ($_GET['s'] == 'mhs'){
    require "Mahasiswa.php";
}elseif ($_GET['s'] == 'barang'){
    require "barang.php";
}elseif ($_GET['s'] == 'profile'){
    require "profile.php";
}elseif ($_GET['s'] == 'setting'){
    require "setting.php";
}elseif ($_GET['s'] == 'change'){
    require "form_change.php";
}elseif ($_GET['s'] == 'dosen'){
    require "dosen.php";
}elseif ($_GET['s'] == 'datapinjam'){
    require "data_pinjam.php";
}elseif ($_GET['s'] == 'riwayat'){
    require "riwayat.php";
}else {
    echo "<script> window.location='home';</script>";
}
?>