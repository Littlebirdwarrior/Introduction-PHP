<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 4 </h1>
    <p> <b>Consignes : </b><br>
        A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien
        hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le
        tableau sera trié par ordre alphabétique de la capitale).<br>
        On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/<br>
        Le tableau passé en argument sera le suivant :<br>
        $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
        "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

    </p>

    <!--Mon PHP---->
    <?php

    //mes variables

    //Le tableau associatif de l'exo 2
    $capitales = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
    ];

    //je push mon nouvel élément
    $capitales["Espagne"] = "Madrid";


    //je trie par ordre abc
    ksort($capitales);

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
            <th>Page Wikipédia</th>
        </tr>
        ";

    //voici ma boucles, je crée une valeurs hrefwiki pour concaténer le path et le pays
    foreach ($capitales as $pays => $capitale) {
        $racinePathWiki = "https://fr.wikipedia.org/wiki/" . $pays;
        $hrefWiki = ' href = "' . $racinePathWiki . ' " ';
        echo "<tr>
                    <td>" . $pays . "</td>
                    <td>" . $capitale . "</td>
                    <td><a" . $hrefWiki . "> Lien</a></td>
                </tr>";
    }

    //je ferme ma table
    echo "</table>";


    ?>

</body>

</html>|