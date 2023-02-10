<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            max-width: 500px;
        }

        form fieldset input[type="text"]{
            width: 98%;
            margin-bottom: 2px;
        }

        form fieldset > div {
            background-color: #ddd;
            margin: 5px 0;
            padding: 5px;
            border: 1px black solid;
        }
    </style>
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 10</h1>
    <p> <b>Consignes : </b><br>
    En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail,<br> ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).<br>

    </p>

    <!--Mon PHP---->
    <?php

    // Mes tableaux associatif (un pour les champs field et un pour les champs radio )
    $elementsField = [ "Nom", "Prénom", "Adresse mail" , "Ville"];

    $elementsChoice = [
        "sexe" => ["Monsieur", "Madame", "Madmoiselle", "Autre"],
        "formation" => ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet "],
    ];

    //Mes fonctions

    function displayForm($elementsField, $elementsChoice){

        echo "<form>
                <fieldset>
                    <legend><b>Vos informations</b></legend>";
    
        //mes fields
        foreach ($elementsField as $field) {
            //supprimer charactère speciaux et mettre en minuscule
            $lowerField = strtolower ($field);
            $validField = htmlspecialchars($lowerField);
            //afficher mes fields
            echo '<label for="'.$field.'">'. $field.' : </label>
            <input type="text" name=" ' . $validField.' " id="' . $validField.'" value="" placeholder="Votre '. $validField.'" ></input><br>';
        }
    
        //mes radios
        foreach($elementsChoice as $choiceCategory => $choices) {
            echo ' <div>
                    <legend><b> Votre '.$choiceCategory.'</b></legend>';
            //extraire mes choix radio de leur table
            foreach($choices as $choice){
                //supprimer charactère speciaux et mettre en minuscule
                $lowerChoice = strtolower($choice);
                $validChoice = htmlspecialchars($lowerChoice);
                //afficher mes radios
                echo ' <input type="radio" name="'.$validChoice.'" id="'.$validChoice.'" value="'.$validChoice.'" ></input>
                        <label for="designer web">'.$choice.'</label><br>';
            };
            echo '</div>';
        }
    
        echo '      <input type="submit"></input>
                </fieldset>
            <form/>';
    };

    displayForm($elementsField, $elementsChoice);

    ?>

</body>

</html>