<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 3</h1>
    <p> <b>Consignes : </b><br>
        Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir dans un nouvel onglet (_blank).<br>
    </p>

    <p>
        <b>Voici le lien en HTML: </b><br>
         <a href="https://elan-formation.eu/" target="_blank" > Lien vers le site Elan Formation</a>
    </p>
 
    <?PHP 
    echo "<br><b>Voici le lien en PHP: </b><br>";
    $link = 'href = "https://elan-formation.eu/"';
    $target = 'target="_blank"';

    echo "<a ". $link . " " . $target. "> Lien vers le site Elan Formation</a>";
    
    
    ?>

     
 
</body>
</html>