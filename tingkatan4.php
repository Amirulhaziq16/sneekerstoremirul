<?php
session_start();
if (!isset($_SESSION['pelajar'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <title>Kuantiti Kuiz Tingkatan 4</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #fce4ec, #e3f2fd);
      color: #333;
      padding: 40px;
    }
    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 40px;
    }
    .subject-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 800px;
      margin: 0 auto;
    }
    .subject-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
      transition: transform 0.3s ease;
    }
    .subject-card:hover {
      transform: translateY(-5px);
    }
    .subject-card h2 {
      margin-bottom: 15px;
      color: #1976d2;
    }
    .subject-card a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #1976d2;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s;
    }
    .subject-card a:hover {
      background-color: #0d47a1;
    }
    .back-btn {
      display: block;
      margin-top: 40px;
      text-align: center;
      color: #e91e63;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <h1>Kuiz Tingkatan 4</h1>

  <div class="subject-list">
    <div class="subject-card">
      <h2>Bahasa Melayu</h2>
      <a href="kuiz_t4_bm.html">Mula Kuiz</a>
    </div>

    <div class="subject-card">
      <h2>Matematik</h2>
      <a href="kuiz_t4_math.html">Mula Kuiz</a>
    </div>

    <div class="subject-card">
      <h2>Sains</h2>
      <a href="kuiz_t4_sains.html">Mula Kuiz</a> <!-- nanti kita buat fail ni -->
    </div>
  </div>

  <a href="index.php" class="back-btn">⬅ Kembali ke Halaman Utama</a>

</body>
</html>
