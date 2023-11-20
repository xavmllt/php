<?php
include('eleve2.php');

$eleve1 = new Eleve2;
$eleve1->setPrenom('Diane');
echo $eleve1->getPrenom().'<br>';

$eleve2 = new Eleve2;
$eleve2->setPrenom('Martin');
echo $eleve2->getPrenom().'<br>';

echo 'Cet(te) élève a été inscrit(e) le '.$eleve1->dateInscription.'<br>';
echo 'Cet(te) élève a été inscrit(e) le '.$eleve2->dateInscription;
?>