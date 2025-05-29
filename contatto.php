<?php
$pageTitle = "Contatti | KiLab Web Lab";

// Variabili iniziali
$errors = [];
$success = false;
$nome = $cognome = $email = $messaggio = "";
$privacy = false;

// Gestione invio form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $cognome = trim($_POST["cognome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $messaggio = trim($_POST["messaggio"] ?? "");
    $privacy = isset($_POST["privacy"]);

    // Validazione
    if ($nome === "") $errors['nome'] = "Il nome è obbligatorio.";
    if ($cognome === "") $errors['cognome'] = "Il cognome è obbligatorio.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Email non valida.";
    if ($messaggio === "") $errors['messaggio'] = "Il messaggio è obbligatorio.";
    if (!$privacy) $errors['privacy'] = "Devi accettare la privacy policy.";

    // Se tutto è corretto, salva o invia i dati
    if (empty($errors)) {
      $data = "Nome: $nome\nCognome: $cognome\nEmail: $email\nMessaggio: $messaggio\n------\n";
      file_put_contents('data/contatti.txt', $data, FILE_APPEND | LOCK_EX);
      $success = true;
  
      // Pulisce i campi dopo l'invio
      $nome = $cognome = $email = $messaggio = "";
      $privacy = false;
  }
  
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contatti di Kiara Inverardi, Full Stack Developer di KiLab Web Lab.">
  <title><?= $pageTitle ?></title>
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

<section class="contact">
  <div class="container">
    <h2>Contattami</h2>
    <div class="contact-content">

      <?php if ($success): ?>
        <p class="success-message">Messaggio inviato con successo! Ti risponderò al più presto.</p>
      <?php else: ?>

      <form class="contact-form" action="contatto.php" method="POST" novalidate>
        <div class="input-group">
          <input type="text" name="nome" placeholder="Nome" value="<?= htmlspecialchars($nome) ?>">
          <?php if (isset($errors['nome'])): ?><span class="error"><?= $errors['nome'] ?></span><?php endif; ?>

          <input type="text" name="cognome" placeholder="Cognome" value="<?= htmlspecialchars($cognome) ?>">
          <?php if (isset($errors['cognome'])): ?><span class="error"><?= $errors['cognome'] ?></span><?php endif; ?>
        </div>

        <div class="input-group">
          <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($email) ?>">
          <?php if (isset($errors['email'])): ?><span class="error"><?= $errors['email'] ?></span><?php endif; ?>
        </div>

        <textarea name="messaggio" placeholder="Messaggio"><?= htmlspecialchars($messaggio) ?></textarea>
        <?php if (isset($errors['messaggio'])): ?><span class="error"><?= $errors['messaggio'] ?></span><?php endif; ?>

        <div class="privacy-policy">
          <input type="checkbox" name="privacy" <?= $privacy ? 'checked' : '' ?>>
          <label>Accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a></label>
          <?php if (isset($errors['privacy'])): ?><span class="error"><?= $errors['privacy'] ?></span><?php endif; ?>
        </div>

        <button type="submit">Invia</button>
      </form>

      <?php endif; ?>

      <div class="contact-info">
        <h3>Informazioni</h3>
        <p><strong>Email:</strong> info@kilabweb.com</p>
        <p><strong>Telefono:</strong> +39 123 456 7890</p>
        <p><strong>Indirizzo:</strong> Via del Codice, 42 - 00100 Roma</p>
      </div>
    </div>
  </div>
</section>

<div class="map">
  <iframe 
    src="https://maps.google.com/maps?q=roma&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width: 100%; height: 300px; border: none;" allowfullscreen="" title="Mappa Google Roma">
  </iframe>
</div>

<?php include 'partials/footer.php'; ?>

</body>
</html>
