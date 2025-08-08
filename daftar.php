<?php
include 'sambung.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Semak sama ada nama pengguna dah wujud
$check = mysqli_query($conn, "SELECT * FROM pelajar WHERE username='$username'");
if (mysqli_num_rows($check) > 0) {
  echo "<script>
    alert('Nama pengguna sudah wujud. Sila guna nama lain.');
    window.location.href = 'daftar.html';
  </script>";
  exit();
}

// Masukkan data user ke database
$sql = "INSERT INTO pelajar (username, password , email) VALUES ('$username', '$password' ,'$email')";

if (mysqli_query($conn, $sql)) {
  echo "<script>
    alert('Pendaftaran berjaya! Sila login.');
    window.location.href = 'login.html';
  </script>";
} else {
  echo "Ralat: " . mysqli_error($conn);
}
?>
