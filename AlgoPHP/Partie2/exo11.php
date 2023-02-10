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
        vendredi 23 février 2018
        <a src="https://www.develop4fun.fr/afficher-la-date-du-jour-en-francais-avec-php/">source develop4fun.fr</a><br>
    </p>

    <!--Mon PHP---->
    <?php

    //mes variables

    $date = "2018-02-23";
    echo formaterDateFr($date);

    // Définition de la fonction

    function formaterDateFr($date){ 

        // Utilisation intldateformatter  
        $dateFr = new DateTime($date);  
        $fonctionDateFormat = new IntlDateFormatter(
            "fr_FR",
            IntlDateFormatter::FULL,//ajoute le jour de la semaine
            IntlDateFormatter::NONE,//supprime les heure après
            'Europe/Paris', 
            IntlDateFormatter::GREGORIAN  );  

        //Mise en forme de la date 

        $fonctionDateFormat->setPattern('EEEE dd MMMM YYYY');  //ce pattern crée le format (jours date mois année)
        return $fonctionDateFormat->format($dateFr);
    };



    //Ma fonction




    ?>

</body>

</html>