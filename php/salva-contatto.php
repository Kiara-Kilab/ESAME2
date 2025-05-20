<?php
// ====== php/salva-contatto.php ======

// Verifica se il form è stato inviato via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera i dati inviati dal form
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $cognome = htmlspecialchars($_POST['cognome'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $messaggio = htmlspecialchars($_POST['messaggio'] ?? '');
    $privacy = isset($_POST['privacy']) ? 'Accettata' : 'Non accettata';

    // Crea una stringa da salvare
    $data = "---\n";
    $data .= "Data: " . date('d/m/Y H:i:s') . "\n";
    $data .= "Nome: $nome\n";
    $data .= "Cognome: $cognome\n";
    $data .= "Email: $email\n";
    $data .= "Messaggio: $messaggio\n";
    $data .= "Privacy: $privacy\n";

    // Salva nel file nella cartella data/
    file_put_contents('../data/contatti.txt', $data, FILE_APPEND);

    // Reindirizza alla home
    header('Location: ../index.php');
    exit;
} else {
    // Accesso diretto non consentito
    echo "Accesso non autorizzato.";
    exit;
}
?>
