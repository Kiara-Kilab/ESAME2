<?php
// Imposta il titolo della pagina
$pageTitle = "Portfolio | KiLab Web Lab";

// Carichiamo i dati dal file JSON esistente
$portfolioJson = file_get_contents("data/lavori.json");

// Convertiamo il contenuto JSON in un array associativo PHP
$portfolioItems = json_decode($portfolioJson, true);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Progetti di sviluppo web di Kiara Inverardi, Full Stack Developer di KiLab Web Lab.">
  <title><?php echo $pageTitle; ?></title>
  <!-- Foglio di stile principale -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Libreria icone Font Awesome -->
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>

<?php include 'partials/header.php'; // Include l'intestazione del sito ?>

<!-- Sezione Portfolio -->
<section id="portfolio-preview" class="portfolio-preview">
  <div class="container">
    <h2 class="portfolio-title">Ultimi Lavori</h2>
    <div class="work-grid">

      <?php foreach ($portfolioItems as $item): ?>
        <article class="work-item">
          <!-- Immagine del progetto -->
          <img src="<?php echo htmlspecialchars($item['immagine']); ?>" alt="Anteprima <?php echo htmlspecialchars($item['titolo']); ?>">

          <!-- Titolo del progetto -->
          <h3><?php echo htmlspecialchars($item['titolo']); ?></h3>

          <!-- Descrizione del progetto -->
          <p><?php echo htmlspecialchars($item['descrizione']); ?></p>

          <!-- Link al dettaglio solo per il primo progetto -->
          <?php if ($item['id'] === "1"): ?>
            <a href="work.php" class="btn btn-porfolio">Scopri di più</a>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php include 'partials/footer.php'; // Include il piè di pagina ?>

</body>
</html>
