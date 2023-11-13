<?php
class Voiture{
    public $marque;
    public $couleur;

    public function __construct($marque, $couleur){
        $this -> marque = $marque;
        $this -> couleur = $couleur;
    }

    public function complet(){
        echo $this -> marque.' '.$this -> couleur.'.'.PHP_EOL;
    }
};
$isaac = new Voiture('Audi', 'Rouge');
$xavier = new Voiture('Mercedes', 'Rose');

echo $isaac->complet();
echo '<br>';
echo $xavier->complet();
?>