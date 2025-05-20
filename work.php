<?php
// Imposta il titolo della pagina di dettaglio progetto
$pageTitle = "Dettaglio Progetto | KiLab Web Lab";
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Responsive Crypto Website by Kiara Inverardi, Full Stack Developer.">
  <title><?php echo $pageTitle; ?></title>
  <!-- Foglio di stile principale -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Libreria icone Font Awesome -->
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>

<?php include 'partials/header.php'; // Include l'intestazione del sito ?>

<!-- Sezione Dettaglio Progetto -->
<section class="project">
  <div class="container">
    <!-- Immagine del progetto -->
    <img src="img/work1-details.jpg" alt="Anteprima del Progetto" class="project-image">

    <!-- Titolo del progetto -->
    <h2 class="project-title">Responsive Crypto Website</h2>

    <!-- Link esterno al progetto -->
    <p class="project-link">
      <i class="fa-solid fa-link"></i>
      <a href="#" target="_blank"><strong>www.cryptosite.com</strong></a>
    </p>

    <!-- Sottotitolo -->
    <h3 class="project-subtitle">Presentazione del progetto</h3>

    <!-- Descrizione del progetto -->
    <p class="project-description">
      Questo progetto rappresenta un sito responsive per la gestione e promozione di criptovalute. Include animazioni moderne, griglie responsive e un'interfaccia chiara e accessibile da ogni dispositivo.
    </p>

    <p class="project-description">
      Il sito è stato progettato per essere altamente performante e accessibile, utilizzando HTML5, CSS3, JavaScript moderno e una struttura mobile-first. L'obiettivo era combinare velocità e affidabilità per offrire un'esperienza utente efficace e coinvolgente.
    </p>
  </div>
</section>

<?php include 'partials/footer.php'; // Include il piè di pagina del sito ?>

</body>
</html>
