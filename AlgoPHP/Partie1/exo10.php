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


//Résolution : je calcule le nb de billet à rendre, puis je mets à jours le solde du reste à payé

//Billet de 10
$nbBillets10 = intdiv($restePayer,10);
//var_dump("Nombre de billets de 10 : ". $nbBillets10);

$restePayer = $restePayer % 10;
//var_dump("Reste à payé:". $restePayer. "€ <br>");

//Billet de 5
$nbBillets5 = intdiv($restePayer, 5);
//var_dump("Nombre de billets de 5 : ". $nbBillets5);

$restePayer = $restePayer % 5;
//var_dump("Reste à payé:". $restePayer. "€ <br>");

//Piece de 2
$nbPieces2 = intdiv($restePayer, 2);
//var_dump("Nombre de pièces de 2 : ". $nbBillets5);

$restePayer = $restePayer % 2;
//var_dump("Reste à payé:". $restePayer. "€ <br>");

//Piece de 1
$nbPieces1 = intdiv($restePayer, 1);
//var_dump("Nombre de pièces de 1 : ". $nbBillets1);

$restePayer = $restePayer % 1;
//var_dump("Reste à payé:". $restePayer. "€ <br>");


//Affichage :

echo "<b>Affichage :</b> <br>
    Rendue de monnaie : <br>".
    $nbBillets10 ." billets de 10 € et ". $nbBillets5. " billet de 5 € et ". $nbPieces2. " pièce de 2 € et ". $nbPieces1. " pièce de 1 €";