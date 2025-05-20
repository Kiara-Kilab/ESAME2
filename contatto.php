<?php
// Imposta il titolo della pagina
$pageTitle = "Contatti | KiLab Web Lab";
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contatti di Kiara Inverardi, Full Stack Developer di KiLab Web Lab.">
  <title><?php echo $pageTitle; ?></title>
  <!-- Collegamento al foglio di stile principale -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome per le icone -->
  <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>

<?php include 'partials/header.php'; // Include l'intestazione del sito ?>

<!-- Sezione Contatti -->
<section class="contact">
  <div class="container">
    <h2>Contattami</h2>
    <div class="contact-content">

      <!-- Form di Contatto -->
      <form class="contact-form" action="php/salva-contatto.php" method="POST">
        <!-- Gruppo input: nome e cognome -->
        <div class="input-group">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="text" name="cognome" placeholder="Cognome" required>
        </div>

        <!-- Input email -->
        <div class="input-group">
          <input type="email" name="email" placeholder="Email" required>
        </div>

        <!-- Messaggio -->
        <textarea name="messaggio" placeholder="Messaggio" required></textarea>

        <!-- Accettazione privacy -->
        <div class="privacy-policy">
          <input type="checkbox" name="privacy" required>
          <label>Accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a></label>
        </div>

        <!-- Pulsante di invio -->
        <button type="submit">Invia</button>
      </form>

      <!-- Informazioni di contatto -->
      <div class="contact-info">
        <h3>Informazioni</h3>
        <p><strong>Email:</strong> info@kilabweb.com</p>
        <p><strong>Telefono:</strong> +39 123 456 7890</p>
        <p><strong>Indirizzo:</strong> Via del Codice, 42 - 00100 Roma</p>
      </div>
    </div>
  </div>
</section>

<!-- Mappa -->
<div class="map">
  <iframe src="https://maps.google.com/maps?q=roma&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" allowfullscreen=""></iframe>
</div>

<?php include 'partials/footer.php'; // Include il piè di pagina del sito ?>

</body>
</html>
