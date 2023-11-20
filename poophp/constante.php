<?php
class Eleve3{
    const ECOLE = 'Élève de notre école'; // création de la constante
    private $_prenom;

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function getPrenom(){
        return $this->$prenom;
    }
}
$eleve3 = new Eleve3;
echo $eleve3::ECOLE;
?>