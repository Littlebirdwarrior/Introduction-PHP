<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PHP - Exo 13</title>
</head>
<body>

    <h1>Introduction PHP - Exo 13</h1>

    <p><b>Consignes : </b>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales. <fr><br>
    Affichage :<br>
    Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9 <br>
    Sa moyenne générale est donc de : 11.22 <br>
    
    </p>

    <?php
    
    $eleves = [
        "Cindy" => [12, 9, 19, 17, 12, 13],
        "Pascal" => [8, 9, 12, 10, 17, 13],
        "Thomas" => [8, 10, 12, 10, 17, 16],
    ];
        
    
    foreach($eleves as $prenom => $notes) {
        echo "<b>". $prenom . ": </b> <br>";
        echo " Les notes obtenues par " . $prenom . " sont :" . displayNotes($notes) . "<br>";
        echo "Sa moyenne générale est donc de : ".calculerMoyenne($notes)."<br>";
    }
    
    function displayNotes(array $notes){
        $displayEachNotes = implode( " ", $notes);
        return $displayEachNotes;  
    }



    function calculerMoyenne(array $notes) : float {
        $nbNotes = count($notes);
        $sommeNotes = array_sum($notes);
        $moyenne = number_format($sommeNotes / $nbNotes, 2);
    
        return $moyenne;
    }
    ?>
</body>
</html>