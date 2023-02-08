<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction PHP - Exo 13</title>
</head>
<body>
    <?php
    echo calculerMoyenne([9, 10.5, 11, 18, 12])."<br>";
    echo calculerMoyenne([19, 10, 3, 8, 19])."<br>";
    
    $eleves = [
        "cindy" => [12, 9, 19, 17, 12, 13],
        "pascal" => [8, 9, 12, 10, 17]
    ];
    
    foreach($eleves as $prenom => $notes) {
        echo "La moyenne de $prenom est : ".calculerMoyenne($notes)."<br>";
    }
    
    function calculerMoyenne(array $notes) : float {
        $nbNotes = count($notes);
        $sommeNotes = array_sum($notes);
        $moyenne = round($sommeNotes / $nbNotes, 2);
    
        return $moyenne;
    }
    ?>
</body>
</html>