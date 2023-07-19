<?php
  // Koneksi ke database
  include 'koneksi.php';

  // Mendapatkan data dari formulir
  $id = $_POST['id_user'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Query untuk mengupdate data
  $query = "UPDATE pengguna SET username='$username', email='$email', password='$password' WHERE id_user='$id'";
  $result = mysqli_query($link, $query);

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Redirect ke halaman sukses atau halaman lainnya
    header('Location: datauser.php');
  } else {
    // Tampilkan pesan error jika query gagal
    echo "Error: " . mysqli_error($link);
  }
?>
