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
    
        <!--Mon PHP---->
    <?php

        //mes variables
            $tableauValeurs=array(true,
                                "texte",
                                10,25.369,
                                array("valeur1","valeur2"));

        //mes fonction
        function displayTable($tableauValeurs){
            foreach($tableauValeurs as $valeurs){
                echo '<tr><td>';
                var_dump($valeurs); //NB: on ne peut pas faire echo de var_dump !!!
                echo '</td></tr>';

            }
        };
    ?>
    <!--Mon affichage (pour que ce soit plus claire, je gère la tache à part)-->
    <table>
        <thead>
            <tr>
                        <th >The table header</th>
             </tr>
        </thead>
        <tbody>
                    <?php
                    displayTable($tableauValeurs);
                    ?>
        </tbody> 
    </table>
    
</body>
</html>