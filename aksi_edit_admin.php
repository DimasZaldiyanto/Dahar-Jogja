<?php
  // Koneksi ke database
  include 'koneksi.php';

  // Mendapatkan data dari formulir
  $id = $_POST['id_admin'];
  $nama_admin = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Query untuk mengupdate data
  $query = "UPDATE admin SET username ='$nama_admin', email='$email', password='$password' WHERE id_admin='$id'";
  $result = mysqli_query($link, $query);

  // Periksa apakah query berhasil dijalankan
  if ($result) {
    // Redirect ke halaman sukses atau halaman lainnya
    header('Location: data_admin.php');
  } else {
    // Tampilkan pesan error jika query gagal
    echo "Error: " . mysqli_error($link);
  }
?>
