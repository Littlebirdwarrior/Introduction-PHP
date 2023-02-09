<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 7</h1>
    <p> <b>Consignes : </b><br>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
    <b>Exemple :</b><br>
    genererCheckbox($elements);<br>
    où $elements est un tableau associatif clé => valeur avec 3 entrées.
    </p>

    <!--Mon PHP---->
    <?php
        //Mes variables
        $elements = [
            "N°1" => "checked",
            "N°2" => "non-checked",
            "N°3" => "non-checked",
            "N°4" => "non-checked",
            "N°5" => "non-checked",

        ];

        //J'ouvre mon form
        echo "  <b>Coche tous les choix <br>(si t'es cap):</b><br>
                <form>";

        //Ma boucle foreach //génère ma checkbox
        
        foreach($elements as $elementName => $elementCheck){
            //Je convertis mon élément en minuscule pour les name, value et id
            $validName = htmlspecialchars($elementName);
            $lowerElement = strtolower($validName);

            //La fonction isChecked renvois une string ckecked ou un vide
            $elementChecked = isChecked($elementCheck);
            
            //J'affiche le résultat de ma boucle
            echo '<input type="checkbox"
            name='.$lowerElement .'
            value=' .$elementName . 
            ' '//espace pour ne pas accolé les elements
            .$elementChecked .'>
            </input>
            <label for="'.$lowerElement.'">
            Choix ' .$elementName .'
            </label><br>';
        }
        //je ferme mon form
        echo "<form/>";
        
        //Pour générer mon attribut de input checked, je crée cette fonction
        function isChecked($elementCheck){
            if($elementCheck == "checked"){
                return "checked";
            } else{
                return null;
            }
        }
    
    ?>
    
</body>
</html>