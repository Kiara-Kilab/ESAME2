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
  <!-- Collegamento al foglio di stile principale -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Libreria Font Awesome -->
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>

<?php include 'partials/header.php'; // Include l'intestazione del sito ?>

<!-- Sezione  Hero -->
<section class="hero">
  <div class="container hero-container">
    <!-- Testo di presentazione -->
    <div class="hero-text">
      <p class="hero-subtitle">Ciao, sono</p>
      <h1 class="hero-title">Kiara Inverardi</h1>
      <p class="hero-role">Full Stack Developer di Kilab web lab</p>
      <p class="hero-description">
        Sono uno sviluppatore full stack con una forte passione per la programmazione e la tecnologia. 
        Amo trasformare idee complesse in soluzioni digitali intuitive e performanti.
      </p>
      <div class="hero-buttons">
        <a href="#" class="btn btn-primary">Assumimi</a>
        <a href="#" class="btn btn-secondary">Scarica CV</a>
      </div>
      <!-- Icone social -->
      <div class="hero-socials">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
      </div>
      <!-- Competenze con icone -->
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

    <!-- Immagine personale -->
    <div class="hero-image">
      <img src="img/kiara.png" alt="Foto di Kiara">
    </div>
  </div>
</section>

<!-- Sezione collaborazioni con loghi di clienti -->
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

<?php
// ====== PREVIEW Portfolio dinamico ======
// Carichiamo i dati JSON dei progetti
$portfolioJson = file_get_contents("data/lavori.json");
$portfolioItems = json_decode($portfolioJson, true);

// Mostriamo solo i primi 6 progetti come anteprima
$previewItems = array_slice($portfolioItems, 0, 6);
?>
<section id="portfolio-preview" class="portfolio-preview">
  <div class="container">
    <h2 class="portfolio">Ultimi Lavori</h2>
    <div class="work-grid">

      <?php foreach ($previewItems as $item): ?>
        <article class="work-item">
          <!-- Immagine del progetto -->
          <img src="<?php echo htmlspecialchars($item['immagine']); ?>" alt="Anteprima <?php echo htmlspecialchars($item['titolo']); ?>">

          <!-- Titolo del progetto -->
          <h3><?php echo htmlspecialchars($item['titolo']); ?></h3>

          <!-- Descrizione breve del progetto -->
          <p><?php echo htmlspecialchars($item['descrizione']); ?></p>

          <!-- Link "Scopri di più" solo per il primo lavoro -->
          <?php if ($item['id'] === "1"): ?>
            <a href="work.php" class="btn btn-porfolio">Scopri di più</a>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>

    </div>

    <!-- Pulsante per visualizzare tutti i lavori -->
    <div class="portfolio-button">
      <a href="portfolio.php" class="btn2 btn-porfolio">Guarda il mio Portfolio</a>
    </div>
  </div>
</section>

<!-- Sezione Testimonianze Clienti -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <h2>Cosa dicono di me</h2>
    <div class="testimonials-grid">
      <!-- Ogni testimonial -->
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

<?php include 'partials/footer.php'; // Include il piè di pagina ?>

</body>
</html>
