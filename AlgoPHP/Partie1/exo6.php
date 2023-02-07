<h1>Exercice 6</h1>
<p>Consigne :
Ecrire un algorithme permettant de calculer <br>
un montant de facture à régler à partir de la quantité d’articles, <br>
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

</p>

<?php

//Déclaration de variable
$nbArticles = 5;
$prixUnitaire = 10.99;

//Calcul du prix HT
$totalHT = $nbArticles * $prixUnitaire;

// Afficher le total TTC d'une facture
$tauxTVA = 0.2;

$totalTTC = $totalHT + $totalHT * $tauxTVA;


echo "  <b>Affichage :</b><br>
        Prix unitaire de l’article : $prixUnitaire € <br>
        Quantité : $nbArticles <br>
        Le total HT est de $totalHT €<br>
        Taux de TVA : $tauxTVA <br>
        Le montant de la facture à régler est de : $totalTTC €<br>";
