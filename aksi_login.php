<?php
$errors = array();
// Validasi username
if (empty($_POST['username'])) {
$errors['username'] = 'Username harus diisi';
}
// validasi password
if (empty ($_POST['password'])) {
$errors['password'] = 'Password harus diisi';
}

if (count($errors) === 0) {
    include "koneksi.php";
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    // Periksa kredensial pengguna di pengguna
    $query1 = "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'";
    $result1 = mysqli_query($link, $query1);

    // Periksa kredensial pengguna di admin
    $query2 = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result2 = mysqli_query($link, $query2);

    // Periksa hasil query di tabel
    if (mysqli_num_rows($result1) > 0) {
        // Pengguna ditemukan di tabel pengguna
        // Berikan akses sesuai peran pengguna pengguna
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'role1';
        header("Location: home.php");
        exit();
    } elseif (mysqli_num_rows($result2) > 0) {
        // Pengguna ditemukan di tabel admin
        // Berikan akses sesuai peran pengguna admin
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'role2';
        header("Location: dashboard.php");
        exit();
    } else {
        // Kredensial tidak valid, kembali ke halaman login dengan pesan peringatan
        $errors['login'] = 'Username atau password salah';
        include 'index.php';
        exit();
    }
} else {
    // Jika terdapat error validasi, kembali ke halaman login dengan pesan peringatan
    include 'index.php';
    exit();
}
?>