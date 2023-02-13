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
        Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
        qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
        Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
        suivantes :<br>
        Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
        BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br>
        Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
        echo $v1->getInfos()<br />
        echo $ve1->getInfos()<br />

    </p>

    <!--Mon PHP---->
    <?php
    class Voiture
    {
        //*déclaration propriété
        private string $_marque;
        private string $_modele;

        //*methode
        public function __construct(string $marque, string $modele)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
        }

        //getter et setter
    
        public function getMarque()
        {
            return $this->_marque;
        }

        public function setMarque(string $marque)
        {
            $this->_marque = $marque;
        }

        //modele
        public function getModele()
        {
            return $this->_modele;
        }

        public function setModele(string $modele)
        {
            $this->_modele = $modele;
        }

        //*Affichage
        public function __toString()
        {
            return $this->getMarque() . ", " . $this->getModele();
        }

    }



    //*la classe extend
    class VoitureElec extends Voiture
    {
        //*déclaration propriété
        private int $_autonomie;

        //*methode
        public function __construct(string $marque, string $modele, int $autonomie)
        {
            parent::__construct($modele, $marque);
            $this->_autonomie = $autonomie;

        }

        //getter et setter
    
        public function getAutonomie()
        {
            return $this->_autonomie;
        }

        public function setAutonomie(int $autonomie)
        {
            $this->_autonomie = $autonomie;
        }

        //*Affichage
    
        public function __toString()
        {
            return parent::__toString() . ", " . $this->getAutonomie();
        }


    }

    //*mes objets
    
    $v1 = new Voiture("Peugeot", "308");
    echo $v1 . "<br>";

    $ve1 = new VoitureElec("Renault", "Zoé", 100);
    echo $ve1 . "<br>";


    ?>

</body>

</html>