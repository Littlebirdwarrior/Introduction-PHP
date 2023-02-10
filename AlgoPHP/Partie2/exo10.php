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

        form fieldset > input:first-of-type{
            width: 100%;
        }

        form fieldset > div {
            background-color: #ddd;
            margin: 5px;
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
    <form>
        <fieldset>
                <legend>Vos informations</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="" placeholder="votre nom" ></input>
            <div>
                <legend>Votre formation</legend>
                <input type="radio" name="designer web" id="designer web" value="designe rweb" ></input>
                <label for="designer web">Designer web</label>
            </div>
            <input type="submit" value="submit"></input>

        </fieldset>
    </form>

    <!--Mon PHP---->
    <?php

    // Mes tableaux associatif (un pour les champs field et un pour les champs radio )
    $elementsField = [ "Nom", "Prénom", "Adresse mail" , "Ville"];

    $elementsChoice = [
        "sexe" => ["Monsieur", "Madame", "Madmoiselle", "Autre"],
        "formation" => ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet "],
    ];

    //Mes fonctions

    foreach ($elementsField as $field) {
        $lowerField = strtolower ($field);
        $validField = htmlspecialchars($lowerField);
        echo '<label for="'.$field.'">'. $field.' : </label>
        <input type="' . $validField.'" name=" ' . $validField.' " id="' . $validField.'" value="" placeholder="Votre '. $validField.'" ></input>';
    }

    ?>

</body>

</html>