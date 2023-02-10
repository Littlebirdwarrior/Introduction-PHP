<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 12</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 12</h1>
    <p> <b>Consignes : </b><br>
    La fonction var_dump($variable) permet d'afficher les informations d'une variable.<br>
    Soit le tableau suivant <br>
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
    A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.<br>
    </p>
    <p>
    Affichage
    bool(true)
    string(5) "texte"
    int(10)
    float(25.369)
    array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }
    </p>

        <!--Mon PHP---->
        <?php

        //mes variables
            $tableauValeurs=array(true,
                                "texte",
                                10,25.369,
                                array("valeur1","valeur2"));

        var_dump($tableauValeurs);

        //Ma fonction




?>
    
</body>
</html>