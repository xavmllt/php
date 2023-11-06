<?php

class Personne{
    public $prenom;
    public $nom;
    public $age;

    public function __construct($prenom, $nom, $age){
        $this -> prenom = $prenom;
        $this -> nom = $nom;
        $this -> age = $age;
    }

    public function nomComplet(){
        echo $this -> nom.' '.$this -> prenom.' '.$this -> age.'.'.PHP_EOL;
        // autre manière de l'écrire :
        // return sprintf('%s %s %d'.$this -> nom.$this -> prenom.$this -> age);
    }

    public function danser(){
        echo $this -> prenom.' est en train de danser'.PHP_EOL;
    }
};

// création d'un objet à partir de la classe personne ou création d'une nouvelle instance de la classe personne
$magne = new Personne('Magne', 'Jean', 102);
$isac = new Personne('Isaac', 'Jacques', 200); 

echo $magne -> danser();
echo '<br>';
$ToutLeNom = $magne -> nomComplet();
echo '<br>';
echo 'Le nom complet est : '.$ToutLeNom.PHP_EOL;
?>