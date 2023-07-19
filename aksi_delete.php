<?php

    //koneksi ke database
    include  "koneksi.php";

    //mendapatkan ID user yang akan di hapus
    $id = $_GET['id_user'];

    //query hapus data pengguna
    $query = "DELETE FROM pengguna WHERE id_user='$id'";
    if (mysqli_query($link, $query)) {
        header('Location: datauser.php');
    }

    //mendapatkan ID user yang akan di hapus
    $id = $_GET['id_admin'];

    //query hapus data pengguna
    $query = "DELETE FROM admin WHERE id_admin='$id'";
    if (mysqli_query($link, $query)) {
        header('Location: data_admin.php');
    }
?>