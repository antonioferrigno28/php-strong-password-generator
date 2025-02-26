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
        <label for="numero">Inserisci la lunghezza della password desiderata(max 20 caratteri)</label>
        <input type="number" name="numero" min=1 max=20>
        <button type="submit" >Daje</button>
    </form>
  
    
</body>
</html>