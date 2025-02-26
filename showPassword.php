<?php
//require di functions
require_once "./functions.php";
// Start della sessione
session_start();

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