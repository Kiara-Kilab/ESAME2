<?php
session_start();

// Funzione per pulire l'input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Inizializza array per errori e valori
$errors = [];
$old = [];

// Recupera e valida i dati
$nome = clean_input($_POST['nome'] ?? '');
$cognome = clean_input($_POST['cognome'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$messaggio = clean_input($_POST['messaggio'] ?? '');
$privacy = isset($_POST['privacy']);

// Salva i vecchi dati in caso di errore
$old = compact('nome', 'cognome', 'email', 'messaggio');
if ($privacy) {
    $old['privacy'] = true;
}

// Validazioni
if ($nome === '') {
    $errors[] = 'Il nome è obbligatorio.';
}
if ($cognome === '') {
    $errors[] = 'Il cognome è obbligatorio.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email non valida.";
}
if ($messaggio === '') {
    $errors[] = 'Il messaggio è obbligatorio.';
}
if (!$privacy) {
    $errors[] = 'Devi accettare la privacy policy.';
}

// Se ci sono errori, salva in sessione e reindirizza
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['old'] = $old;
    header('Location: ../contatti.php');
    exit;
}

// Se tutto è corretto
$_SESSION['form_success'] = "Grazie per averci contattato, ti risponderò al più presto.";

// Mostra conferma con attributi di accessibilità
?>
<div class="form-success" role="status" aria-live="polite" title="Messaggio inviato correttamente">
  <p>Grazie per averci contattato!</p>
  <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
  <p><strong>Cognome:</strong> <?= htmlspecialchars($cognome) ?></p>
  <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
  <p><strong>Messaggio:</strong> <?= nl2br(htmlspecialchars($messaggio)) ?></p>
</div>
<?php
// Pulisci i dati dalla sessione
unset($_SESSION['old']);
unset($_SESSION['form_success']);
?>
