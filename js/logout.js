// Menambahkan event listener untuk tombol logout
document.addEventListener('DOMContentLoaded', function() {
  const logoutBtn = document.getElementById('logoutBtn');
logoutBtn.addEventListener('click', function() {
  console.log('logoutBtn')
  // Mengkonfirmasi logout kepada pengguna
  if (confirm('Anda yakin ingin logout?')) {
    // Lakukan aksi logout
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'logout.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Menampilkan pesan logout berhasil
        alert('Anda telah berhasil logout!');

        // Mengarahkan pengguna kembali ke halaman login
        window.location.href = 'index.php';
      } else {
        // Menampilkan pesan gagal melakukan logout
        alert('Terjadi kesalahan saat melakukan logout.');
      }
    };
    xhr.send();
    }
  });
});
