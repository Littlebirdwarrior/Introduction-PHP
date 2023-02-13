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
    suivants :<br>

    source <a href="https://coding-champ.com/tutorials/php/getters-and-setters">https://coding-champ.com/tutorials/php/getters-and-setters</a>

        <!--    //spl_autoload_register(function ($class_name) {
        // require_once $class_name . '.php';
        // });-->

    </p>

    <!--Mon PHP---->
    <?php 
    class Voiture
    {
        // déclaration d'une propriété privée (déclarer en public = mauvaise pratique)
            private string $_marque;
            private string $_modele;
            private int $_nbPortes;
            private int $_vitesseActuelle;
            private bool $_demarrer;
    
        // déclaration des méthodes avec $this (j'associe un nom a une variable)
            public function __construct( string $marque, string $modele, int $nbPortes){ //
                $this -> _marque = $marque;
                $this -> _modele = $modele;
                $this -> _nbPortes= $nbPortes;
                //ces valeurs sont définie ici, pas besoin de les mettre dans les arguments
                $this -> _vitesseActuelle = 0;
                $this -> _demarrer = false;
            
            }
            //setter et setter ( toujours en couple, correspond au nombre de méthode)
            
            //modele

            public function getMarque() {
                return $this->_marque;
            }

            public function setMarque(string $marque){
				$this -> _marque = $marque;
		    }

            //modele
            public function getModele() {
                return $this->_modele;
            }

            public function setModele(string $modele){
				$this -> _modele = $modele;
		    }

            //nb porte
            public function getNbPortes() {
                return $this->_nbPortes;
            }

            public function setNbPortes(int $nbPortes){
				$this -> _nbPortes = $nbPortes;
		    }

            
            //ma fonction démarrer
            
            public function getDemarrer() {
                return $this->_demarrer;
            }
            
            public function getEtat(){
                if($this->_demarrer == 1) {
                    return "La voiture est démarrée";
                } 
                    else {
                    return " la voiture n'est pas démarrée";
                }
            }
            
            public function setDemarrer(bool $demarrer){
                $this -> _demarrer = $demarrer;//j'appelle ma valeur true dans le setter
		    }
            
            //Je change la valeurs de $demarrer
            public function demarrer(){
                $this -> setDemarrer(true);
                echo "le véhicule " . $this->getModele(). "est demarrer."
            }
            
            //Je change la valeurs de $demarrer
            public function stopper(){
                $this -> setDemarrer(false);
                //
            }
            
            //fonction accelerer()
            
            public function getVitesseActuelle(){
                return $this -> _vitesseActuelle;
            }
            
            public function setVitesseActuelle(int $nouvelleVitesse){
                $this -> _vitesseActuelle = $nouvelleVitesse;
            }
            
            public function accelerer(int $vitesseAccel){
                echo "le véhicule " . $this->getModele(). " veut accélerer de "  .$vitesseAccel . "<br>" ;
                // if demarrer = false
                if (demarrer = false) {
                    echo $this->getMarque(). "n'est pas démarré"
                }
                // 
                //else {
                    $addVitesse = $this->_vitesseActuelle + $vitesseAccel;
                    $this->setVitesseActuelle( $addVitesse);
                    echo "le véhicule accelère de" . $addVitesse ."km/h"
                } 
                
            }
            
            //J'affiche ma voiture
            public function __toString(){
                return $this->getMarque(). ", " .$this->getModele(). ", " .$this->getNbPortes(). ", ". $this->getEtat().", " .$this->getVitesseActuelle(). "<br>";
            }

    }

    //Je crée mes véicules

    $v1 = new Voiture("Peugeot", "308", 5);
    echo "Ma voiture v1 : ". $v1;

    $v2 = new Voiture("Citroën","C4",3);
    echo "Ma voiture v2 : ". $v2;

    $v1->setDemarrer(true);

    $v1->accelerer(20);
    echo "Ma voiture v1 : ". $v1;

    //Test demarrer
    var_dump($v1->getDemarrer());

    $v1->setDemarrer(true);
    //Ma valeurs à bien été changée
    var_dump($v1->getDemarrer());




 

    ?>
    
</body>
</html>