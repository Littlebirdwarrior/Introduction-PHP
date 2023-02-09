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
        $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
        Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que<br>
        le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
        Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

    </p>

    <!--Mon PHP---->
    <?php

    //Un tableau associatif
    $capitales = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
    ];

    //je crée ma table et je lui ajoute un style
    echo "
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th {
        background : #ddd;
    }

    td {
        padding: 0 1rem;
        text-align: center;
    }
    </style>

    <table>
    <tr>
        <th>Pays</th>
        <th>Capitale</th>
    </tr>
    ";

    //voici mes boucles
    foreach ($capitales as $pays => $capitale) {
        echo "<tr>
                <td>" . $pays . "</td>
                <td>" . $capitale . "</td>
            </tr>";
    }

    //je ferme ma table
    echo "</table>";
    ?>

</body>

</html>