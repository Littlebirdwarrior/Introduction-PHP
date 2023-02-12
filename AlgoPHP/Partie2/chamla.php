

<?php 

class Employe {

    public $nom;
    public $prenom;
    public $age;
    public function presentation ($nom, $prenom, $age){
    var_dump('Bonjour' . $prenom . " " . $nom . " " . $age);

    }   

}

$employe1 = new Employe();
$employe1 -> nom ="Lior";
$employe1 -> prenom ="Chamla";
$employe1 -> age = 32;

$employe2 = new Employe();
$employe2 -> nom = "Ior";
$employe2 -> prenom ="Mla";
$employe2 -> age = 22;






?>