<?php
class Eleve2{
    private $_prenom;
    // constructeur
    public function __construct(){
        date_default_timezone_set('Europe/Paris');
        $this->dateInscription = date('d/m/Y H:i:s');
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
}
?>