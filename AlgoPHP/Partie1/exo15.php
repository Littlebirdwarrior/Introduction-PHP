<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP introduction - Partie 1 - Exo 15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>PHP introduction - Partie 2 - Exo 1</h1>
    <p> <b>Consignes : </b><br>
        Créer une classe Personne (nom, prénom et date de naissance).<br>
        Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
        $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
        $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; Affichage :<br>
        Michel DUPONT a … ans<br>
        Alice DUCHEMIN a … ans<br>

    </p>
    <?php

    class Personne
    {
        //*déclaration instances
        private string $_nom;
        private string $_prenom;
        private DateTime $_dateNaissance; //on convertira la string au niveau du this, ici on 

        //*construct
        public function __construct(string $nom, string $prenom, string $dateNaissance)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance = new DateTime($dateNaissance);
        }

        //setter et getter
        public function getNom()
        {
            return $this->_nom;
        }

        public function setNom(string $nom)
        {
            $this->_nom = $nom;
        }

        public function getPrenom()
        {
            return $this->_prenom;
        }

        public function setPrenom(string $prenom)
        {
            $this->_prenom = $prenom;
        }

        public function getDateNaissance()
        {
            return $this->_dateNaissance;
        }

        public function setDateNaissance(DateTime $dateNaissance)
        {
            $this->_dateNaissance = $dateNaissance;
        }


        //mes méthodes

        public function convertDatetoString()
        {
            $date = $this->getDateNaissance();
            $dateString = $date->format('Y-m-d');
            return $dateString;
        }


        public function getAge()
        {
            $today = date('Y-m-d');
            date_default_timezone_set('Europe/London');
            $dateCourante = new DateTime($today);
            return $diff = $dateCourante->diff($this->_dateNaissance)->y; //le ->formate la date ici
        }

        public function __toString()
        {
            return $this->getPrenom() . " " . $this->getNom() . " a " . $this->getAge() . " ans<br>";
        }
    }

    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

    echo $p1;
    echo $p2;




    ?>
</body>

</html>