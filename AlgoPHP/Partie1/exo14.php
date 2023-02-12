<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PHP - Exo 14</title>
</head>
<body>
    <h1>Introduction PHP - Exo 14</h1>
    <p> <b>Consigne</b>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). Affichage (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :<br>
    Age de la personne : 33 ans 4 mois 4 jours <br>
    <a href="https://codes-sources.commentcamarche.net/forum/affich-10086244-calcul-d-un-age-en-fonction-d-une-annee"></a> Source</a>
    <a href="https://waytolearnx.com/2019/07/comment-calculer-lage-a-partir-de-la-date-de-naissance-en-php.html"></a> Source</a>
    <a href="https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/obtenir-formater-date/"></a> Source</a>
    </p>

    <?php

        //mes variable
        $dateNaissance = '17/01/1985';
        $dateCourante = '21/05/2018';

        $dtNaissance = DateTime::createFromFormat('d/m/Y', $dateNaissance);
        echo "Date de naissance : " .$dtNaissance->format('d/m/Y'). "<br>";

        $dtCourante = DateTime::createFromFormat('d/m/Y', $dateCourante);
        echo "Date courante : " .$dtCourante->format('d/m/Y'). "<br>";

        $diff = $dtCourante->diff($dtNaissance);

        $age = $diff->format('%y');
        $mois = $diff->format('%m');
        $jours = $diff->format('%d');


        echo "Age de la personne : ".$age. " ans, ".$mois. " mois, et" .$jours. " jours";

    
    
    
    
    ?>

</body>
</html>