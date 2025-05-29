<?php
// Imposta il titolo della pagina
$pageTitle = "Dettaglio Lavoro | KiLab Web Lab";

// Leggi l'ID del lavoro passato via GET, oppure mostra errore se mancante
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($id === null) {
  die("ID mancante. Ritorna alla <a href='index.php'>home</a>.");
}

// Carica il file JSON dei lavori
$jsonData = file_get_contents("data/lavori.json");
$lavori = json_decode($jsonData, true);

// Cerca il lavoro con l'ID corrispondente
$lavoroTrovato = null;
foreach ($lavori as $lavoro) {
  if ($lavoro['id'] == $id) {
    $lavoroTrovato = $lavoro;
    break;
  }
}

// Se non trovato, mostra un messaggio
if (!$lavoroTrovato) {
  die("Lavoro non trovato. Ritorna alla <a href='index.php'>home</a>.");
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dettaglio del lavoro: <?php echo htmlspecialchars($lavoroTrovato['titolo']); ?>">
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/style.css">
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

<section class="project">
  <div class="container">
    <img src="<?php echo $lavoroTrovato['immagine']; ?>" alt="Anteprima progetto" class="project-image">
    <h1 class="project-title"><?php echo htmlspecialchars($lavoroTrovato['titolo']); ?></h1>
    <p class="project-description"><?php echo htmlspecialchars($lavoroTrovato['descrizione']); ?></p>
    <div class="project-link">
      <a href="<?php echo $lavoroTrovato['link']; ?>" target="_blank" title="Vai al progetto">Visita il sito</a>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>
