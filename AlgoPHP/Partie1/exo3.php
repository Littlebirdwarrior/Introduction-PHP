<h1>Exercice 3</h1>
<p>Consigne :
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer<br> 
le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.

</p>

<?php

//Déclaration de variable
$chaineDeCaracteres = "Notre formation DL commence";
$motFrist = "aujourd'hui";
$motSecond="demain";



// Compter le nombre de caractères (espaces inclus !)
echo "<b>Affichage</b><br>". $chaineDeCaracteres. " ".$motFrist. " | " .$chaineDeCaracteres. " ".$motSecond;

