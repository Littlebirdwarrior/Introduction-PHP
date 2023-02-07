<h1>Exercice 9</h1>
<p>Consigne :
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »). Affichage :
Age : 32
Sexe : F
La personne est imposable. 

</p>

<?php

//les variables

$age = 40;
$sexe = "H";

echo "<b>Affichage:</b><br> Age: $age <br> Sexe: $sexe <br>";

//mes condition
$femmeImposable = $age >= 18 && $age <=32 && $sexe == "F";
$hommeImposable = $age >= 22 && $sexe == "H";

//La fonction tris

if(gettype($age) == "integer" && ($sexe == "F" || $sexe == "H")){ 

    //mes conditions
    if($femmeImposable){
        echo "Cette femme est imposable";
    }elseif($hommeImposable){
        echo "Cette homme est imposable";
    }else{
        echo "Cette personne n'est pas imposable";
    };

    //si mes valeurs de bases sont fausse, je renvois une erreur
}else{
    echo "les valeurs fournies sont incorrectes";
};

