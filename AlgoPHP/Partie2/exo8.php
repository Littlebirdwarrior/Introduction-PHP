<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 2 - Exo 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        figure, img {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .images{
            display: flex;
            flex-wrap: wrap;
        }

        .images figure {
            width: 250px;
            height: fit-content;
            margin: 0 25px 25px  0;
        }

        .images figure>img {
            width: 100%;
        }

        .images>p {
            color: red
        }
    </style>
</head>
<body>
    <h1>PHP introduction - Partie 2 - Exo 8</h1>
    <p> <b>Consignes : </b><br>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
    <b>Exemple :</b><br>
    repeterImage($url,4);<br>

    </p>

    <!--Mon PHP---->
    <?php 

    //mes variables 

    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    $n = 4;//ici nombre soumis, N comme la consigne le demande.
    
    //Ma fonction
    function afficherImage($url, $n){
    $imageSrc = ' src ="'. $url. '"';
    
    echo "<h2>Affichage :</h2>";
    
    //Mon encart pour les image

    echo '<div class="images">';
    
    //je vérifie le type de mes variables, en cas de défault, une alerte s'affiche
    if(gettype($url) == "string" && gettype($n) == "integer" ) {
        //ma boucle for
        for ($i = 0; $i < $n; $i++) { 
            echo '
            <figure>
            <img' . $imageSrc. '" alt="Petit chihuahua qui mange une penthoufle"/>
            </figure>
            ';
        }
    } else { 
        echo "<p>Alerte : L'url ou le nombre d'affichage demandé sont invalide</p><br>";
    }

    }

    afficherImage($url, $n);

    echo "</div>";
    
    ?>
    
</body>
</html>