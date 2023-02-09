<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 6</h1>
    <p> <b>Consignes : </b><br>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
    Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);<br>
    </p>

    <!--Mon PHP---->
    <?php 

    echo "<br><h2>Affichage : </h2><br>";
    
    //Mes variables
    $elements = array("Monsieur","Madame","Mademoiselle");

    //Ma fonction
    function alimenterListeDeroulante($elements) {
        //Je crée mon select
        echo '<label for="select">Choose an option:</label>
                <select name="select" id="select">';
        //Ma boucle foreach définis une option pour chaque élément du array
        foreach ($elements as $elementOption) {
            $elementValue = strtolower($elementOption);
        echo '<option value="' . $elementValue .'">' . $elementOption .'</option>
        ';
        }
        //fermeture du select
        echo '</select>';
    }

    //Appel de la fonction
    echo alimenterListeDeroulante($elements);
    
    
    ?>
    
</body>
</html>