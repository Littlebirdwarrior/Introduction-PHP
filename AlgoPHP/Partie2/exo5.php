<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 5</h1>
    <p> <b>Consignes : </b><br>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
    précisant le nom des champs associés.
    Exemple :
    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);
    </p>

    <!--Mon PHP---->
    <?php 

    echo '<br><h2>Affichage : </h2> <br><form>';

    //mes variables
    $nomsInput = ["Nom","Prénom","Ville"];

    //Ma fonction
    function afficherInput($nomsInput){

        foreach($nomsInput as $inputLabel){
            $inputName = strtolower($inputLabel);
            echo '<label>'. $inputLabel .': </label><input type="text" name="' . $inputName . '" /><br />';
        };
    };
    
    echo afficherInput($nomsInput);

    echo '<input type="submit" name="submit" value="Envoie!" /></form>';
    
    ?>
    
</body>
</html>