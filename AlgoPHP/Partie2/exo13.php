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
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
    suivants :

    </p>

    <!--Mon PHP---->
    <?php 
    class Personne
    {
        // déclaration d'une propriété privée (déclarer en public = mauvaise pratique)
            private string $_marque;
            private string $_modele;
            private int $_nbPortes;
            private int $_vitesseActuelle;
            private bool $_demarrer;
    
        // déclaration des méthodes avec $this
            public function __construct( string $marque, string $modele, int $nbPortes, int $vitesseActuelle, bool $demarrer){
                $this -> _marque;
                $this -> _modele;
                $this -> _nbPortes;
                $this -> _vitesseActuelle;
                $this -> _demarrer;
            
            }
            //setter et setter ( toujours en couple, correspond au nombre de méthode)
            //modele

            public function getMarque(){
                $this -> $this _marque;
            }

            public function setMarque( string $marque){
                $this -> $this _marque;
            }

    }
    

    
    
    ?>
    
</body>
</html>