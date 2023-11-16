<?php
class Elevefille extends Eleve{
    private $age;

    // public function __construct($age){
    //     $this->_age = $age;
    // }

    public function setAge($age){
        $this->_age = $age;
    }
    public function getAge(){
        return $this->_age;
    }

    public function setPrenom($prenom){
        $this->_prenom = ucfirst($prenom);
    }
}
?>