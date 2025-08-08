<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KampusKu</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<!-- Butang Naik Atas -->
<button onclick="scrollToTop()" id="btnTop" title="Naik Atas">↑</button>

<script>
  // Tunjuk butang bila scroll bawah
  window.onscroll = function() {
    const btn = document.getElementById("btnTop");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  // Scroll ke atas bila ditekan
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

<body>
  <header class="hero">
    <h1>KampusKu</h1>
    <p>Komuniti Digital Pelajar Masa Kini</p>
   <nav>
  <a href="index.php">Utama</a>
  <a href="nota.php">Nota</a>
  <a href="jadual.php">Jadual</a>
  <a href="aktiviti.php">Aktiviti</a>
  <a href="kokurikulum.php">Kokurikulum</a>
  <?php session_start(); ?>
  <?php
    if (isset($_SESSION['pelajar'])) {
      echo '<a href="logout.php" style="background-color: white; color: #2575fc; padding: 6px 12px; border-radius: 6px; font-weight: bold;">Log Keluar</a>';
    } else {
      echo '<a href="login.php" style="background-color: white; color: #2575fc; padding: 6px 12px; border-radius: 6px; font-weight: bold;">Log Masuk</a>';
    }
  ?>
</nav>
  </header>

  <main class="grid-container">
    <div class="card">
      <img src="images/ikon nota.png" alt="Nota">
      <h2>Nota pelajar</h2>
      <p>Koleksi nota untuk semua subjek.</p>
      <a href="nota.php" class="btn">Lihat Nota</a>
    </div>

    <div class="card">
      <img src="images/ikon jadual.png" alt="Jadual">
      <h2>Jadual Kelas</h2>
      <p>Jadual belajar mingguan anda.</p>
      <a href="jadual.php" class="btn">Lihat Jadual</a>
    </div>

    <div class="card">
      <img src="images/ikon aktiviti.png" alt="Aktiviti">
      <h2>Aktiviti Sekolah</h2>
      <p>Sukan, koko, dan acara sekolah.</p>
      <a href="aktiviti.php" class="btn">Lihat Aktiviti</a>
    </div>

    <div class="card">
      <img src="images/koko.png" alt="Kokurikulum" style="height: 180px; object-fit: contain;">
      <h2>Kokurikulum</h2>
      <p>Membina jati diri.</p>
      <a href="kokurikulum.php" class="btn">Lihat Kokurikulum</a>
    </div>
  </main>

  <!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <title>Menu Utama Kuiz</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #ddd, #8f94fb);
      text-align: center;
      color: white;
      padding: 50px;
    }

    h1 {
      margin-bottom: 30px;
    }

    .btn {
      background-color: white;
      color: #4e54c8;
      padding: 15px 30px;
      margin: 15px;
      border-radius: 12px;
      font-size: 18px;
      text-decoration: none;
      display: inline-block;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <h1>Selamat Datang ke Kuiz KampusKu</h1>
  <p>Sila pilih tingkatan anda:</p>

  <a class="btn" href="tingkatan1.php">Tingkatan 1</a>
  <a class="btn" href="tingkatan2.php">Tingkatan 2</a>
  <a class="btn" href="tingkatan3.php">Tingkatan 3</a>
  <a class="btn" href="tingkatan4.php">Tingkatan 4</a>
  <a class="btn" href="tingkatan5.php">Tingkatan 5</a>
</body>
</html>

  
  <footer>
    <p>&copy; 2025 KampusKu. Direka oleh user Hebat.</p>
  </footer>
</body>
</html>
