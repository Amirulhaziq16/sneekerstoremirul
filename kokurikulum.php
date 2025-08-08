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
  <title>Kokurikulum - KampusKu</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="hero">
    <h1>Kokurikulum</h1>
    <p>Aktiviti luar bilik darjah untuk pembangunan user</p>
    <nav>
      <a href="index.php">Utama</a>
      <a href="nota.php">Nota</a>
      <a href="jadual.php">Jadual</a>
      <a href="aktiviti.php">Aktiviti</a>
      <a href="kokurikulum.php" class="active">Kokurikulum</a>
    </nav>
  </header>

  <main>

    <!-- UNIT BERUNIFORM -->
    <section>
      <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
        <h2 style="text-align: center;">Unit Beruniform</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>Kadet Remaja Sekolah</h3>
          <button class="btn" onclick="toggleBab('babkrs')">Muat Turun</button>
          <div id="babkrs" class="bab-list" style="display: none;">
            <ul>
              <li><a href="krs.jpg" target="_blank">Pemakaian</a></li>
            </ul>
          </div>
        </div>
        <div class="card">
          <h3>Kadet Polis</h3>
          <button class="btn" onclick="toggleBab('babKadetPolis')">Muat Turun</button>
          <div id="babKadetPolis" class="bab-list" style="display: none;">
            <ul>
              <li><a href="kadet polis.jpg" target="_blank">Pemakaian</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- KELAB & PERSATUAN -->
    <section>
      <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
        <h2 style="text-align: center;">Kelab & Persatuan</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>Kelab Komputer</h3>
          <button class="btn" onclick="toggleBab('babKomputer')">Muat Turun</button>
          <div id="babKomputer" class="bab-list" style="display: none;">
            <ul>
              <li><a href="pengenalan it.pdf" target="_blank">Bab 1: Pengenalan IT</a></li>
            </ul>
          </div>
        </div>
        <div class="card">
          <h3>Kelab Bahasa</h3>
          <button class="btn" onclick="toggleBab('babBahasa')">Muat Turun</button>
          <div id="babBahasa" class="bab-list" style="display: none;">
            <ul>
              <li><a href="pengenalan tatabahasa.pdf" target="_blank">Bab 2: Tatabahasa</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- SUKAN & PERMAINAN -->
    <section>
      <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
        <h2 style="text-align: center;">Sukan & Permainan</h2>
      </header>
      <div class="grid-container">
        <div class="card">
          <h3>Bola Sepak</h3>
          <button class="btn" onclick="toggleBab('babBola')">Muat Turun</button>
          <div id="babBola" class="bab-list" style="display: none;">
            <ul>
              <li><a href="pengenalan bola sepak.pdf" target="_blank">Bab 1: Pengenalan bola sepak</a></li>
            </ul>
          </div>
        </div>
        <div class="card">
          <h3>Badminton</h3>
          <button class="btn" onclick="toggleBab('babBadminton')">Muat Turun</button>
          <div id="babBadminton" class="bab-list" style="display: none;">
            <ul>
              <li><a href="pengenalan badminton.pdf" target="_blank">Bab 1: Pengenalan badminton</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer>
    <p>&copy; 2025 KampusKu. Kecemerlangan dalam kokurikulum adalah kekuatan user seimbang.</p>
  </footer>

  <script>
    function toggleBab(id) {
      const babDiv = document.getElementById(id);
      babDiv.style.display = (babDiv.style.display === "none") ? "block" : "none";
    }
  </script>
</body>
</html>
