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
        En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
        adresse e-mail a le bon format.<br>
        Affichage : <br>
        L’adresse elan@elan-formation.fr est une adresse e-mail valide <br>
        L’adresse contact@elan est une adresse e-mail invalide <br>

    </p>

    <!--Mon PHP---->
    <?php
    $emails = ["elan@elan-formation.fr", " contact@elan"];
    // Valider l'email
    foreach ($emails as $email) {
        echo $email . " : ";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse e-mail est valide <br>";
        } else {
            echo "L'adresse e-mail n'est pas valide <br>";
        }

    }



    ?>

</body>

</html>