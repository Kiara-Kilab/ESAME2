<?php
// Imposta il titolo della pagina home
$pageTitle = "KiLab Web Lab";
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio di Kiara Inverardi, Full Stack Developer di KiLab Web Lab. Scopri i miei progetti di sviluppo web.">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    if (toggle && menu) {
      toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
      });
    }
  });
</script>

</head>
<body>

<?php include 'partials/header.php'; ?>

<!-- Sezione Hero -->
<section class="hero">
  <div class="container hero-container">
    <div class="hero-text">
      <p class="hero-subtitle">Ciao, sono</p>
      <h1 class="hero-title">Kiara Inverardi</h1>
      <p class="hero-role">Full Stack Developer di Kilab web lab</p>
      <p class="hero-description">
        Sono uno sviluppatore full stack con una forte passione per la programmazione e la tecnologia. 
        Amo trasformare idee complesse in soluzioni digitali intuitive e performanti.
      </p>
      <div class="hero-buttons">
        <a href="#contatti" class="btn btn-primary" title="Contattami direttamente">Assumimi</a>
        <a href="CV_Kiara.pdf" class="btn btn-secondary" title="Scarica il mio CV" download>Scarica CV</a>
      </div>
      <div class="hero-socials">
        <a href="#" title="Visita la mia pagina Facebook"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" title="Visita il mio profilo Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" title="Visita il mio profilo LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#" title="Visita il mio GitHub"><i class="fa-brands fa-github"></i></a>
      </div>
      <div class="skills-container">
        <h2>Le mie competenze</h2>
        <div class="skills">
          <i class="fa-brands fa-html5"></i>
          <i class="fa-brands fa-css3-alt"></i>
          <i class="fa-brands fa-js"></i>
          <i class="fa-brands fa-react"></i>
          <i class="fa-brands fa-node"></i>
          <i class="fa-brands fa-python"></i>
          <i class="fa-solid fa-database"></i>
          <i class="fa-solid fa-leaf"></i>
        </div>
      </div>
    </div>
    <div class="hero-image">
      <img src="img/kiara.png" alt="Foto di Kiara">
    </div>
  </div>
</section>

<!-- Sezione Collaborazioni -->
<section id="collaborazioni" class="collaborazioni">
  <div class="container">
    <h2>Collaborazioni</h2>
    <div class="logo-grid">
      <img src="img/clienti/cliente1.png" alt="Cliente 1">
      <img src="img/clienti/cliente2.png" alt="Cliente 2">
      <img src="img/clienti/cliente3.png" alt="Cliente 3">
      <img src="img/clienti/cliente4.png" alt="Cliente 4">
      <img src="img/clienti/cliente5.png" alt="Cliente 5">
    </div>
  </div>
</section>

<!-- Portfolio dinamico preview -->
<?php
$portfolioJson = file_get_contents("data/lavori.json");
$portfolioItems = json_decode($portfolioJson, true);
$previewItems = array_slice($portfolioItems, 0, 6);
?>
<section id="portfolio-preview" class="portfolio-preview">
  <div class="container">
    <h2 class="portfolio">Ultimi Lavori</h2>
    <div class="work-grid">
      <?php foreach ($previewItems as $item): ?>
        <article class="work-item">
          <img src="<?= htmlspecialchars($item['immagine']) ?>" alt="Anteprima <?= htmlspecialchars($item['titolo']) ?>">
          <h3><?= htmlspecialchars($item['titolo']) ?></h3>
          <p><?= htmlspecialchars($item['descrizione']) ?></p>
          <a href="work.php?id=<?= $item['id'] ?>" class="btn btn-porfolio" title="Scopri di più su <?= htmlspecialchars($item['titolo']) ?>">Scopri di più</a>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="portfolio-button">
      <a href="portfolio.php" class="btn2 btn-porfolio" title="Guarda tutti i lavori del mio portfolio">Guarda il mio Portfolio</a>
    </div>
  </div>
</section>

<!-- Sezione Testimonianze -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <h2>Cosa dicono di me</h2>
    <div class="testimonials-grid">
      <div class="testimonial-box">
        <div class="testimonial-header">
          <img src="img/user1.png" alt="Cliente 1" class="testimonial-avatar">
          <div class="testimonial-info">
            <h3>Teresa Verdi</h3>
            <p>UI/UX Designer</p>
          </div>
          <div class="testimonial-rating">★★★★★</div>
        </div>
        <p class="testimonial-text">La sua competenza è evidente in ogni fase del progetto...</p>
      </div>
      <div class="testimonial-box">
        <div class="testimonial-header">
          <img src="img/user2.png" alt="Cliente 2" class="testimonial-avatar">
          <div class="testimonial-info">
            <h3>Giovanna Bianchi</h3>
            <p>Project Manager</p>
          </div>
          <div class="testimonial-rating">★★★★★</div>
        </div>
        <p class="testimonial-text">Una sviluppatrice incredibile con un grande occhio per i dettagli...</p>
      </div>
      <div class="testimonial-box">
        <div class="testimonial-header">
          <img src="img/user3.png" alt="Cliente 3" class="testimonial-avatar">
          <div class="testimonial-info">
            <h3>Emilio Rossi</h3>
            <p>Marketing Expert</p>
          </div>
          <div class="testimonial-rating">★★★★★</div>
        </div>
        <p class="testimonial-text">Ottime capacità di comunicazione e competenze tecniche...</p>
      </div>
      <div class="testimonial-box">
        <div class="testimonial-header">
          <img src="img/user4.png" alt="Cliente 4" class="testimonial-avatar">
          <div class="testimonial-info">
            <h3>Michela Marrone</h3>
            <p>Imprenditrice</p>
          </div>
          <div class="testimonial-rating">★★★★★</div>
        </div>
        <p class="testimonial-text">Ha realizzato un sito web fantastico che ha superato le mie aspettative...</p>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>
