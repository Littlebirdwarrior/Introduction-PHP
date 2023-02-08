<h1>Exercice 2</h1>
<p><b>Consigne :</b><br>
A partir de la phrase de l’exercice 1, écrire l’instruction 
permettant de compter le nombre de mots contenus dans celle-ci.<br>

</p>

<?php 
//Déclaration de variable
$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "<b>Affichage : </b><br> La phrase contient $nbMots mots<br>";