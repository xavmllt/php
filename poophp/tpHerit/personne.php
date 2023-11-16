<?php
class Personne{
    private $_nom;
    private $_prenom;
    private $_age;

    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function setAge($age){
        $this->_age = $age;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_age;
    }

    public function dormir(){
        echo 'Dormir'.$this->_nom;
    }
}
?>