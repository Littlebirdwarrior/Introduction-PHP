<h1>Exercice 4</h1>
<p>Consigne :
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<?php

//Déclaration de variable
$chaineDeCaracteres = "Engage le jeu que je le gagne";

// Compter le nombre de caractères (espaces inclus !)

//enlever les espaces, 
$mettreEnMajuscules= strtoupper($chaineDeCaracteres);
//mettre en majuscules;
$chaineDeCaracteres1 = str_replace(' ', '', $mettreEnMajuscules);

//retourner la phrase
$chaineDeCaracteres2 = strrev($chaineDeCaracteres1);

//vérifier la comparaison
echo "<b>Affichons la comparaison :</b>". "<br>". $chaineDeCaracteres1. " | " .$chaineDeCaracteres2 ."<br>";

//fonction conditionnelle 
 if($chaineDeCaracteres1 === $chaineDeCaracteres2) {
   echo " « ".$chaineDeCaracteres.  " » est un palindrome";
 } else {
     echo " « ". $chaineDeCaracteres. " » n'est pas un palindrome";
 }