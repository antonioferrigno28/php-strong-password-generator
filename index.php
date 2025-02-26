<?php 
//require del file functions
require_once "./functions.php";
//start della sessione
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="showPassword.php" method="GET">
    <label for="numero">Inserisci la lunghezza della password desiderata (max 20 caratteri):</label>
    <input type="number" name="numero" min="1" max="20" required><br>

    <label for="carattMaiuscoli">Lettere maiuscole:</label>
    <input type="checkbox" name="carattMaiuscoli"><br>

    <label for="carattMinuscoli">Lettere minuscole:</label>
    <input type="checkbox" name="carattMinuscoli"><br>

    <label for="carattNumeri">Numeri:</label>
    <input type="checkbox" name="carattNumeri"><br>

    <label for="carattSimboli">Simboli:</label>
    <input type="checkbox" name="carattSimboli"><br>

    <button type="submit">Daje</button>
</form>

  
    
</body>
</html>