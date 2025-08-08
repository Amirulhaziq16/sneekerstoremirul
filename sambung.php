<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kampusku";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Gagal sambung ke database: " . mysqli_connect_error());
}
?>
