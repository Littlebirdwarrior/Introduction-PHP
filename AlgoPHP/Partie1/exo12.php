<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PHP - Exo 11</title>
</head>
<body>
    <h1>Exercice 11</h1>
    <p><b>Consigne: </b><br>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br>
    </p>
    <p>
    <b>Exemple :</b> tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG Affichage :<br>
    Salut Mickaël<br>
    Hola Virgile<br>
    Hello Marie-Claire<br>
    </p>
    <p>
    <b>Variante :</b> trier d’abord le tableau par ordre alphabétique du prénom Affichage :<br>
    Hello Marie-Claire<br>
    Salut Mickaël<br>
    Hola Virgile<br>
    </p>

<?php

//Mes tableaux

//je crée deux TA avec des clés identiques
$personnes = [
    "FRA" => "Michaël" ,
    "ESP" =>  "Virgile",
    "ENG" => "Marie-Claire",
];

$tableauLangueSalutation = [
    "FRA" => "Salut",
    "ESP" => "Hola",
    "ENG" => "Hello",
];

//Je vérifie mes tableau et tris mes donnée

echo "<b>Vérifications et tris : </b> <br>";

echo "Les personnes de ce tableau sont par ordre ABC :<br>";

ksort($personnes);
ksort($tableauLangueSalutation);

foreach($personnes as $nation => $personne){
    echo  $personne . " est de nationnalité : " . $nation . " <br>";
};

echo "<br>Les nationnalités de ce tableau sont :<br>";

foreach($tableauLangueSalutation as $pays => $salutation){
    echo $pays . " : " . $salutation . " <br>";
};

echo "<br> <b>Affichage : </b> <br>";

echo $tableauLangueSalutation["FRA"] . " " . $personnes["FRA"] ." <br>";
echo $tableauLangueSalutation["ESP"] . " " . $personnes["ESP"] ." <br>";
echo $tableauLangueSalutation["ENG"] . " " . $personnes["ENG"] ." <br>";




// //*LES TABLEAU ASSOCIATIF :)

// //*Comment parcourir un tableau
// $tableau = ["plop", "plip", "plap"]; //*ds tableau, valeurs ont un index
    
//  echo $tableau[1]. " <br>";//*pour acceder valeur, citer l'index

// //* TABLEAUX ASSOCIATIFS
// //* Ds les TA, les elements ont des clé qui permettent de les retrouver
// //* déclatation (key) -> valeur (value) (clé doit être unique !!)

// $personnes = [
//     "Michaël" => "FRA",
//     "Virgile" => "ESP",
//     "Marie-Claire" => "ENG",
// ];

// //*var_dump: permet de voir les valeurs (type) et leurs [clés] entre crochet
// var_dump($personnes);

// echo "<br>";

// //*Pour parcourir les tableaux, on utilise une boucle foreach qui transforme les clé et les valeurs en variable
// foreach($personnes as $key => $value){
//     echo $key . " parle le :" . $value . " <br>";//*avec echo, on les affiche
// }

// //*Pour associer deux tableau associatif, il suffit de créer un tableau n°1 ou LA CLE EST LA VALEUR d'un tableau n°2
// $tableauLangueSalutation = [
//     "FRA" => "Salut",
//     "ESP" => "Hola",
//     "ENG" => "Hello",
// ];

// //*Après, on appelle la valeur du tableau n°2 en utilisant l'association clé valeur du tableau n°1
// //* echo $tableau_n°2[$tableau_n°1[clé valeur à récupérer]]

// echo $tableauLangueSalutation["FRA"]. " <br>";

// //*ici faire $tableauLangueSalutation["FRA"] == faire $tableauLangueSalutation[$personnes["Michaël"]]

// echo $tableauLangueSalutation[$personnes["Michaël"]]. " <br>";



?>
    
</body>
</html>