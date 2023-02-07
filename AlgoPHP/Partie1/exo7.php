<h1>Exercice 7</h1>
<p>Consigne :
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br>
    Poussin : entre 6 et 7 ans <br>
    Pupille : entre 8 et 9 ans <br>
    Minime : entre 10 et 11 ans <br>
    Cadet : à partir de 12 ans <br>
    Si la catégorie n’est pas gérée, merci de le préciser. <br>

</p>

<?php

//Déclaration de variable

$ageUser = 10;

//Je définis mes conditions
$Poussin = $ageUser >= 6 && $ageUser <= 7;
$Pupille = $ageUser >= 8 && $ageUser <= 9;
$Minime = $ageUser >= 10 && $ageUser <= 11;
$Cadet = $ageUser >= 12 && $ageUser <= 18;
$Autres =  $ageUser <= 6 && $ageUser >= 1;


//Break case : je vérifie mes conditions et j'applique en conséquence
 if(gettype($ageUser) == "double" || gettype($ageUser) == "integer" ) {
     switch(true) {
        case $Poussin: 
            echo "L’enfant qui a". $ageUser ."appartient à la catégorie « Poussin » <br>"; 
            break;
        case $Pupille: 
            echo "L’enfant qui a". $ageUser ."appartient à la catégorie « Pupille » <br>"; 
            break;
        case $Minime: 
            echo "L’enfant qui a". $ageUser ."appartient à la catégorie « Minime » <br>"; 
            break;
        case $Cadet: echo "L’enfant qui a". $ageUser ."appartient à la catégorie « Cadet » <br>"; 
            break;
        case $Autres:
             echo "L’enfant qui a". $ageUser ."appartient à aucune catégorie <br>"; 
            break;
        default;
    }
 } else {
     echo "Veuillez saisir un âge numérique !<br>";
 }
