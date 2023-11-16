<?php
class Eleve{
    protected $_prenom;

    // public function __construct($prenom){
    //     $this->_prenom = $prenom;
    // }
    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
}
?>