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
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
    <b>Exemple :</b><br>
    genererCheckbox($elements);<br>
    où $elements est un tableau associatif clé => valeur avec 3 entrées.
    </p>

    <form action="/action_page.php">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="vehicle1">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="submit" value="Submit">
    </form>


    <!--Mon PHP---->
    <?php

    //Mes variables
    $elements = [
        "element-1" => "Primitif",
        "element-2" => "Berger",
        "element-3" => "Chasseur",
        "element-4" => "Terrier",
        "element-5" => "Molosse",

    ];
    
    //Ma fonction
    function genererCheckbox($elements){
        echo '<h2>Affichage<br>';
        echo '  <h3>A quel groupe de chien appartient votre compagnon ?</h3>
                <form action="/action_page.php">';

        foreach ($elements as $element => $elementValue){
                $specialChar = htmlspecialchars($elementValue);
                $lowerElement = strtolower($specialChar);
                echo ' <input 
                            type="checkbox" 
                            id="' . $lowerElement . 
                            ' " name="'. $lowerElement . 
                            ' " value="' . $lowerElement . '">
                        <label for="'. $lowerElement . '"> 
                        I have a ' . $elementValue.
                        ' </label><br>';
        }

        

        echo '   <input type="submit" value="Submit">
                </form>';

    };
    
    genererCheckbox($elements);
    
    ?>
    
</body>
</html>