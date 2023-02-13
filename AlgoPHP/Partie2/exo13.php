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
        //** */ déclaration d'une propriété privée (déclarer en public = mauvaise pratique)
            private string $_marque;
            private string $_modele;
            private int $_nbPortes;
            private int $_vitesseActuelle;
            private bool $_demarrer;
    
        //** */ déclaration des méthodes avec $this (j'associe un nom a une variable)
            public function __construct( string $marque, string $modele, int $nbPortes){ //
                $this -> _marque = $marque;
                $this -> _modele = $modele;
                $this -> _nbPortes= $nbPortes;
                //ces valeurs sont définie ici, pas besoin de les mettre dans les arguments
                $this -> _vitesseActuelle = 0;
                $this -> _demarrer = false;
            
            }
            //**setter et setter ( toujours en couple, correspond au nombre de méthode)
            
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

            //vitesse actuelle
            
            public function getVitesseActuelle(){
                return $this -> _vitesseActuelle;
            }

            public function getVitesse(){
                if($this->_vitesseActuelle == 0) {
                    return " la voiture est à l'arrêt";
                } 
                else {
                    return "La voiture roule à". $this->_vitesseActuelle ."km";
                    }
            }
            
            public function setVitesseActuelle(int $nouvelleVitesse){
                $this -> _vitesseActuelle = $nouvelleVitesse;
            }

            //demarrer
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
            
            //**ma fonction demarrer()
            
            //Je change la valeurs de $demarrer
            public function demarrer(){
                $this -> setDemarrer(true);
                echo "le véhicule " . $this->getMarque(). " ". $this->getModele(). " est demarré.<br>";
            }


            //**ma fonction stopper()
            public function stopper(){
                $this -> setDemarrer(false);
                echo "le véhicule " . $this->getMarque(). " ". $this->getModele(). " est stoppé.<br>";
            }
            
            //**fonction accelerer()
            
            public function accelerer(int $vitesseAccel){
                echo "Le véhicule " . $this->getMarque(). " ". $this->getModele(). " veut accélerer de "  .$vitesseAccel . " km/h <br>" ;
                // if demarrer = false
                if ($this->getDemarrer() == false) {
                    echo "Le véhicule ". $this->getMarque(). " " .$this->getModele(). " ne peut pas accelerer car il n'est pas démarré <br>";
                    
                }
                else {
                    $addVitesse = $this->_vitesseActuelle + $vitesseAccel;
                    $this->setVitesseActuelle( $addVitesse);
                    echo "le véhicule accelère de " . $vitesseAccel ."km/h. Sa vitesse est alors de ".$this->getVitesseActuelle()." km/h <br>";
                } 
                
            }

            //**fonction ralentir()
            public function ralentir(int $vitesseRal){
                echo "Le véhicule " . $this->getMarque(). " ". $this->getModele(). " veut ralentir de "  .$vitesseRal . " km/h <br>" ;
                // if demarrer = false
                if ($this->getDemarrer() == false) {
                    echo "Le véhicule ". $this->getMarque(). " " .$this->getModele(). " ne peut pas ralentir car il n'est pas démarré <br>";
                    
                }
                else {
                    $ReduceVitesse = $this->_vitesseActuelle - $vitesseRal;
                    $this->setVitesseActuelle( $ReduceVitesse);
                    echo "le véhicule accelère de " . $vitesseRal ."km/h. Sa vitesse est alors de ".$this->getVitesseActuelle()." km/h <br>";
                } 
                
            }
            
            
            //**FonctionJ'affiche ma voiture
            public function __toString(){
                return 
                $this->getMarque(). 
                ", " .$this->getModele(). 
                ", à" .$this->getNbPortes(). "portes, "
                . $this->getEtat().", 
                " .$this->getVitesse(). "<br>";
            }

    }

    //**Je crée mes véicules

    $v1 = new Voiture("Peugeot", "308", 5);
    echo "Ma voiture v1 : ". $v1;

    $v2 = new Voiture("Citroën","C4",3);
    echo "Ma voiture v2 : ". $v2;

    $v1->demarrer();
    $v2->demarrer();


    $v1->accelerer(20);
    $v1->accelerer(20);

    $v1->ralentir(10);

    $v2->stopper();




 

    ?>
    
</body>
</html>