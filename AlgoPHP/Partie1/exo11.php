<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1 - Exo 11</title>
</head>
<body>
    <h1>Exercice 11</h1>
    <p>Consigne :
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). <br>
    Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
    Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</p>
<?php

//Mes variables
$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

//La boucle foreach
echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}

?>
    
</body>
</html>

