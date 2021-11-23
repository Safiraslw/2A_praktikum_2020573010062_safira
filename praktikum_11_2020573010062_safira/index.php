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
}else {
    echo "<script> window.location='home';</script>";
}
?>