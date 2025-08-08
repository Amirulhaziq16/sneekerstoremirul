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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aktiviti Sekolah - KampusKu</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="hero">
    <h1>Aktiviti Sekolah</h1>
    <p>Aktiviti tahunan & mingguan sekolah</p>
    <nav>
      <a href="index.php">Utama</a>
      <a href="nota.php">Nota</a>
      <a href="jadual.php">Jadual</a>
      <a href="aktiviti.php">Aktiviti</a>
      <a href="kokurikulum.php">Kokurikulum</a>
    </nav>
  </header>
  <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;"></header>

  <main class="grid-container">
    <div class="card">
      <h2>Sukan Tahunan</h2>
      <p>25 Ogos 2025, Stadium Mini SMK Seri Kampus</p>
    </div>
    <div class="card">
      <h2>Hari Kokurikulum</h2>
      <p>12 September 2025 – Pameran & gerai unit beruniform</p>
    </div>
    <div class="card">
      <h2>Minggu Bahasa</h2>
      <p>Aktiviti deklamasi sajak, pidato, dan kuiz BM & BI</p>
    </div>
    <div class="card">
      <h2>Kem Motivasi</h2>
      <p>Motivasi SPM 2025 oleh alumni & kaunselor</p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 KampusKu. Sertai & jayakan aktiviti sekolah anda!</p>
  </footer>
</body>
</html>
