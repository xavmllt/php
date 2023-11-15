<?php
class Pers{
    private $prenom;
    private $nom;
    private $age;

    public function __construct($prenom, $nom, $age){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->age=$age;
    }

    // setter
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }

    public function setAge($age){
        $this->age=$age;
    }

    // getter
    public function getPrenom(){
        return $this->prenom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    public function saluer(){
        echo 'Salut les amis';
    }
}
$Emi = new Pers('Emilienne', 'MAILLARD', 2);
echo $Emi->getPrenom();
echo $Emi->getNom();
echo $Emi->getAge();
?>