<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 9</h1>
    <p> <b>Consignes : </b><br>
        Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
        <b>Exemple :</b><br>
        afficherRadio($nomsRadio);
    </p>

    <!--Mon PHP---->
    <?php
    echo "<h2>Affichage :</h2>";

    //Mes variables

    $nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

    //Ma fonction


    function  afficherRadio($nomsRadio)
    {
        echo "<form><b>Votre genre svp : </b><br>";
        foreach ($nomsRadio as $option) {
            $lowerOption = strtolower($option);
            echo '  <input type="radio" id="' . $lowerOption . '" name="' . $option . '" value="' . $lowerOption . '"></input>';
            echo '   <label for="' . $lowerOption . '">' . $option . '</label><br> ';
        }
        echo "</form>";
    };

    afficherRadio($nomsRadio);


    ?>

</body>

</html>