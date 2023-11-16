<?php
include('eleve.class.php');
include('Elevefille.class.php');

$eleveN1 = new Eleve();
$eleveN2 = new Elevefille();

$eleveN1->setPrenom('Alain');
$eleveN2->setPrenom('Juline');
$eleveN2->setAge(22);

echo $eleveN1->getPrenom().'<br>';
echo $eleveN2->getPrenom().' qui a '.$eleveN2->getAge().' ans.<br>';
?>