<h1>Exercice 5</h1>
<p>Consigne :
Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.

</p>

<?php

//Déclaration variables

$montantFranc = 100;
$coefficientEuro = 0.1524; //en sachant que 100Fr = 15.24 euros, 1Fr vaut 0.1524 euros

//Calcul de conversion 

$calculConversion = $montantFranc * $coefficientEuro;
$montantEuro = number_format($calculConversion, 2);

echo "<b>Affichage:</b> <br> Montant en francs : ". $montantFranc. "<br>". $montantFranc. " francs = ". $montantEuro. "€";