<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 11</h1>
    <p> <b>Consignes : </b><br>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une
    chaîne de caractère représentant une date.<br>
    Exemple :<br>
    formaterDateFr("2018-02-23");
    Affichage<br>
    vendredi 23 février 2018<br>
    </p>

    <!--Mon PHP---->
    <?php

    //mes variables
    $date = 2018-02-23;

    //*Comment formater une date
    echo date('j-m-Y'). '<br>';
    echo date('l d m Y h:i:s'). '<br>';
    echo date('l F Y'). '<br>';
    echo date('r'). '<br>';
    
    date_default_timezone_set('Europe/Paris');//Paris = GMT+1
    
    $date = '27-09-2013';
    echo date('Y/m/d H:i:s', strtotime($date)). '<br>';

    echo date('Y-m-d H:i:s', strtotime($date)). '<br>';

    setlocale(LC_TIME, "fr_FR");

    // DEVIENT
    $formaterDateFr = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

    echo $formaterDateFr->format(time());




    //Ma fonction




    ?>

</body>

</html>