<?php
    $host = mysqli_connect("localhost", "root", "");
    $db = mysql_select_db("db_sipbar")

    $id = $_POST['id'];
     mysqli_query("DELET FROM tb_pinjam WHERE id='$id' ")
     or die(mysql_erorr());
?>