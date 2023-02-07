<h1>Exercice 10</h1>
<p>Consigne :
A partir d’un montant à payer et d’une somme versée pour régler un achat, <br>
écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de <br>
billets de 10 € et 5 €, de pièces de 2 € et 1 €. <br>

</p>

<?php

//Variables

$factureBoutique = 152;
$versementClient = 200;

//J'optient forcément un résultat negatif, je crée son opposé
$restePayer = ($factureBoutique - $versementClient)*-1;

echo "<b>Affichage :</b> <br>
        Montant à payé : $factureBoutique € <br>
        € Montant versé : $versementClient € <br>
        Reste à payé : $restePayer € <br>
    ";


//Résolution

$billet10 = $restePayer % 10;
$billet5 = $billet10 %5;
$billet2 = $billet5 % 2;
$billet1 = $billet2 % 1;

echo $billet1;
