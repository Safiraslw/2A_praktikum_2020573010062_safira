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
}else {
    echo "<script> window.location='home';</script>";
}
?>