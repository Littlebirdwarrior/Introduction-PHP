<h1>Exercice 8</h1>
<p>Consigne :
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme : Affichage (pour la table de 8) :
    Table de 8 : <br>
    1 x 8 = 8  <br>
    2 x 8 = 16  <br>
    3 x 8 = 24 …  <br>
    Remarque : proposer 2 solutions avec 2 types de boucles.  <br>

</p>

<?php

//Déclaration de variable
$nbTest = 1;

//Boucle

// WHILE (tant que)

echo "<h2>Boucle while</h2><br>";

while($nbTest <= 10) {
    echo $nbTest. "x 8 = ". $nbTest * 8 ."<br>";
    $nbTest ++; 
}

echo "<h2>Boucle foreach</h2><br>";

// FOREACH
$range = range(1,10);

foreach(range(1,10) as $nbTest) { 
    echo $nbTest. "x 8 = ". $nbTest * 8 ."<br>"; 
}