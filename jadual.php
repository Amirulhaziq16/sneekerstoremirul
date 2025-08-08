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
  <title>Jadual Kelas - KampusKu</title>
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
    <h1>Jadual Kelas</h1>
    <p>Rancang masa anda dengan bijak</p>
    <main><!-- Shortcut Tingkatan -->
<div class="shortcut-tingkatan">
  <a href="#tingkatan1">Tingkatan 1</a>
  <a href="#tingkatan2">Tingkatan 2</a>
  <a href="#tingkatan3">Tingkatan 3</a>
  <a href="#tingkatan4">Tingkatan 4</a>
  <a href="#tingkatan5">Tingkatan 5</a>
</div>

    <nav>
      <a href="index.php">Utama</a>
      <a href="nota.php">Nota</a>
      <a href="jadual.php">Jadual</a>
      <a href="aktiviti.php">Aktiviti</a>
      <a href="kokurikulum.php">Kokurikulum</a>
    </nav>
  </header>

    <!-- Tingkatan 1 -->
     <section id="tingkatan1"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 1</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>1 Amanah</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
        <div class="card">
          <h3>1 Bestari</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
      </div>
    </section>

    <!-- Tingkatan 2 -->
     <section id="tingkatan2"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 2</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>2 Amanah</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
        <div class="card">
          <h3>2 Bestari</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
      </div>
    </section>

    <!-- Tingkatan 3 -->
     <section id="tingkatan3"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 3</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>3 Amanah</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
        <div class="card">
          <h3>3 Bestari</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
      </div>
    </section>

    <!-- Tingkatan 4 -->
     <section id="tingkatan4"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 4</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>4 Amanah</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
        <div class="card">
          <h3>4 Bestari</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
      </div>
    </section>

    <!-- Tingkatan 5 -->
     <section id="tingkatan5"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 5</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>5 Amanah</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
        <div class="card">
          <h3>5 Bestari</h3>
          <a href="e30bfb18-52c0-47ba-a870-cf15aaecff35 (1).jpg" class="btn" target="_blank">Muat Turun</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 KampusKu. Susun masa anda dengan cemerlang.</p>
  </footer>
</body>
</html>