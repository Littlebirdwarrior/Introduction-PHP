<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 1</h1>
    <p> <b>Consignes : </b><br>
        Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
        Vous devrez appeler la fonction comme suit : convertirMajRouge($texte)


    </p>

    <!--Mon PHP---->
    <?php

    //Mes variables

    function convertirMajRouge($test): string
    {
        return "<p style ='color : red;'>" .
            mb_strtoupper($test) . "</p>";
    }

    $test = "Je suis ploploplop";
    echo convertirMajRouge($test);


    ?>

</body>

</html>