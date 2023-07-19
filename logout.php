<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
  <script src="js/logout.js"></script>
  <link href="css/stylelogout.css" rel="stylesheet">
</head>
<body>
<h1>Apakah Anda yakin ingin logout?</h1>
 
 <!-- Tombol Logout -->
 <button id="logoutBtn">Logout</button>

 <script>
   document.addEventListener('DOMContentLoaded', function() {
     const logoutBtn = document.getElementById('logoutBtn');
     logoutBtn.addEventListener('click', function() {
       // Logika aksi logout
       console.log('Logout berhasil!');
     });
   });
 </script>
</body>
</html>
