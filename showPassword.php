<?php
//require di functions
require_once "./functions.php";
// Start della sessione
session_start();

$chars = '';

// Verifica che l'inserimento delle varie opzioni
if (isset($_GET['carattMaiuscoli'])) {
    //aggiunge le lettere maiuscole alla variabile chars
    $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
}
if (isset($_GET['carattMinuscoli'])) {
    //aggiunge le lettere minuscole alla variabile chars
    $chars .= 'abcdefghijklmnopqrstuvwxyz'; 
}
if (isset($_GET['carattNumeri'])) {
    //aggiunge i numeri alla variabile chars
    $chars .= '0123456789';  
}
if (isset($_GET['carattSimboli'])) {
    //aggiunge i simboli alla variabile chars
    $chars .= '!$%()/=*[]@#';  
}

// Se l'utente non ha selezionato nulla, restituisci un errore
if (strlen($chars) == 0) {
    echo "Devi selezionare almeno un set di caratteri!";
    //Interrompi l'esecuzione per evitare di mostrare le varie tabelle d'errore
    exit();
    
}

// Controllo che il numero sia passato via GET
if (!isset($_GET['numero'])) {
    // Se non è arrivato il numero torno alla index
    header("Location: ./index.php");
    
}else {
    //genera una nuova password
    $generatedPassword = generatePassword($numero, $chars);
    //Salva in variabile di sessione
    $_SESSION['password'] = $generatedPassword;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Password: <?php echo $_SESSION["password"]?></h2>
<a href="index.php">Torna indietro per generare una nuova password</a>

</body>
</html>