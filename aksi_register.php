<?php

$errors = array();
if (empty($_POST['username'])) {
    $errors['username'] = 'Username harus diisikan';
}
if (empty($_POST['email'])) {
    $errors['email'] = 'Email harus diisikan';
}
if (empty($_POST['password'])) {
    $errors['password'] = 'Password harus diisikan';
}

if (count($errors) === 0) {
    include "koneksi.php";
    // Memanggil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyimpan data ke dalam tabel pengguna
    $query = "INSERT INTO pengguna VALUES ('', '$username', '$email', '$password')";
    $result = mysqli_query($link, $query);

    // Cek hasil query
    if ($result) {
        // Pendaftaran berhasil
        header("Location: index.php");
        exit();
    } else {
        // Pendaftaran gagal, redirect kembali ke halaman pendaftaran
        header("Location: register.php");
        exit();
    }
} else {
    // Jika terdapat error, kembali ke halaman form dengan menampilkan error
    include 'register.php';
}

?>