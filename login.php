<?php
session_start();
include 'sambung.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if ($username === "admin" && $password === "admin123") {
  $_SESSION['pelajar'] = 'admin';
  header("Location: admin.html");
  exit();
}

$sql = "SELECT * FROM pelajar WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $_SESSION['pelajar'] = $username;
  header("Location: index.php");
  exit();
} else {
  echo "<script>
    alert('Login gagal. Sila semak semula.');
    window.location.href = 'login.html';
  </script>";
}
?>
