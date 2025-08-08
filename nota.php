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
  <title>Nota Sekolah Menengah - KampusKu</title>
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
    <h1>Nota user Sekolah Menengah</h1>
    <p>Nota lengkap SPM dan PT3 mengikut tingkatan</p>
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
    <main class="grid-container">
      <div class="card">
        <h2>Bahasa Melayu</h2>
         <button class="btn" onclick="toggleBab('bmBab')">Muat Turun</button>
      <div id="bmBab" class="bab-list" style="display: none;">
        <p><strong>Bab Bahasa Melayu:</strong></p>
        <ul>
          <li><a href="https://anyflip.com/enlys/ejqv">Teknik menjawab</a></li>
          <li><a href="NOVEL-DESTINASI-IMPIAN-TINGKATAN-SATU.pdf">Komsas</a></li>
        </ul>
      </div>
    </div>
      <div class="card">
        <h2>Matematik</h2>
         <button class="btn" onclick="toggleBab('mathBab')">Muat Turun</button>
      <div id="mathBab" class="bab-list" style="display: none;">
        <p><strong>Bab Matematik:</strong></p>
        <ul>
          <li><a href="MT T1 KSSM Bab 1 Nombor Nisbah zila khalid =).pdf">Bab 1: Nombor Nisbah</a></li>
        </ul>
      </div>
    </div>
    </main>
  </section>

  <!-- Tingkatan 2 -->
  <section id="tingkatan2"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 2</h2>
    </header>
     <main class="grid-container">
      <div class="card">
        <h2>Bahasa Melayu</h2>
        <button class="btn" onclick="toggleBab('bmBab2')">Muat Turun</button>
      <div id="bmBab2" class="bab-list" style="display: none;">
        <p><strong>Bab Bahasa Melayu:</strong></p>
        <ul>
          <li><a href="NOTA-JALAN-KE-PUNCAK-TINGKATAN-2.pdf">Komsas</a></li>
        </ul>
      </div>
    </div>
      <div class="card">
        <h2>Matematik</h2>
         <button class="btn" onclick="toggleBab('mathBab2')">Muat Turun</button>
      <div id="mathBab2" class="bab-list" style="display: none;">
        <p><strong>Bab Matematik:</strong></p>
        <ul>
          <li><a href="MT T2 KSSM Bab 1 Pola dan Jujukan zila khalid =).pdf">Bab 1: Pola dan Jujukan</a></li>
         
        </ul>
      </div>
    </div>
    </main>
  </section>

  <!-- Tingkatan 3 -->
  <section id="tingkatan3"></section>
    <header class="hero" style="background: rgba(0,0,0,0.2); padding: 2rem;">
      <h2>Tingkatan 3</h2>
    </header>
    <main class="grid-container">
      <div class="card">
        <h2>Bahasa Melayu</h2>
        <button class="btn" onclick="toggleBab('bmBab3')">Muat Turun</button>
      <div id="bmBab3"bab-list" style="display: none;">
        <p><strong>Bab Bahasa Melayu:</strong></p>
        <ul>
          <li><a href="NOTA-JESTERU-IMPIAN-DI-JARING-TINGKATAN-3.pdf">Komsas</a></li>
        </ul>
      </div>
    </div>
      <div class="card">
        <h2>Matematik</h2>
        <button class="btn" onclick="toggleBab('mathBab3')">Muat Turun</button>
      <div id="mathBab3" class="bab-list" style="display: none;">
        <p><strong>Bab Matematik:</strong></p>
        <ul>
          <li><a href="MT T3 KSSM BAB 1 Indeks zila khalid =).pdf">Bab 1: Indeks</a></li>
         
        </ul>
      </div>
    </div>
    </main>
  </section>

  <!-- Tingkatan 4 & 5 (SPM) -->
  <section id="tingkatan4"></section>
    <header class="hero" style="background: rgba(0,0,0,0.3); padding: 2rem;">
      <h2>Tingkatan 4 </h2>
    </header>
    <main class="grid-container">
      <div class="card">
        <h2>Bahasa Melayu</h2>
         <button class="btn" onclick="toggleBab('bmBab4')">Muat Turun</button>
      <div id="bmBab4" class="bab-list" style="display: none;">
        <p><strong>Bab Bahasa Melayu:</strong></p>
        <ul>
          <li><a href="KOMSAS-DEFINISI-ORANG-BERAKAL-T4.pdf">Komsas</a></li>
        </ul>
      </div>
    </div>
      <div class="card">
        <h2>Matematik</h2>
        <button class="btn" onclick="toggleBab('mathBab4')">Muat Turun</button>
      <div id="mathBab4" class="bab-list" style="display: none;">
        <p><strong>Bab Matematik:</strong></p>
        <ul>
          <li><a href="MAT_T4_KSSM_Bab_1_Fungsi_dan_Persamaan_Kuadratik_dalam_Satu_Pemboleh.pdf">Bab 1: Fungsi dan Persamaan</a></li>
          
        </ul>
      </div>
    </div>
      
    </main>
  </section>

    <section id="tingkatan5"></section>
    <header class="hero" style="background: rgba(0,0,0,0.3); padding: 2rem;">
      <h2>Tingkatan 5 </h2>
    </header>
    <main class="grid-container">
      <div class="card">
        <h2>Bahasa Melayu</h2>
        <button class="btn" onclick="toggleBab('bmBab5')">Muat Turun</button>
      <div id="bmBab5" class="bab-list" style="display: none;">
        <p><strong>Bab Bahasa Melayu:</strong></p>
        <ul>
          <li><a href="https://anyflip.com/timwm/wgzb">Nota ringkas</a></li>
        </ul>
      </div>
    </div>
      <div class="card">
        <h2>Matematik</h2>
        <button class="btn" onclick="toggleBab('mathBab5')">Muat Turun</button>
      <div id="mathBab5" class="bab-list" style="display: none;">
        <p><strong>Bab Matematik:</strong></p>
        <ul>
          <li><a href="MT B1 F5 NORAZILAKHALIDCHANNEL.pdf">Bab 1: Ubahan</a></li>
        
        </ul>
      </div>
    </div> 
    </main>
  </section>

  <footer>
    <p>&copy; 2025 KampusKu. Nota oleh user untuk user.</p>
  </footer>

  <script>
    function toggleBab(id) {
      const babDiv = document.getElementById(id);
      babDiv.style.display = babDiv.style.display === "none" ? "block" : "none";
    }
  </script>
</body>
</html>
