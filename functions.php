<?php 


//Definisco una variabile chars che è una stringa che contiene vari caratteri
//servirà per estrarre randomicamente i caratteri che verranno inseriti nella pw
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!$%()/=*[]@#';



function generatePassword($numero, $chars) {
    //inizializzo la variabile generatedPassword
    $generatedPassword = "";

    for ($i=0; $i <$numero; $i++) {
        //seleziono un indice casuale all'interno della stringa $chars
        $randomChar = $chars[rand(0, strlen($chars)-1)];
        //Concateno carattere per carattere
        $generatedPassword .= $randomChar;
    
    }
    //return della password generata
    return $generatedPassword;
    }

    // La inizializzo di nuovo per una questione di scope
    $generatedPassword = "";


    // Controllo che il numero sia settato
    if (isset($_GET['numero'])) {
        //se il numero arriva allora lo conservo in una variabile $numero
        $numero = $_GET["numero"];
        //chiamo la funzione ed il risultato verrà immagazinato in generatedPassword
        $generatedPassword = generatePassword($numero, $chars);
    }
    
?>