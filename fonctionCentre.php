<div class="content">
        <h1>Les Fonctions</h1>
    
  	<?php

  // UNE FONCTION
  //
  // Correspond à une série d'instructions qui effectuent une tâche spécifique.
  // Pour exécuter une fonction il faut appeler la fonction par son nom en plaçant ou non des paramètres.
  // On parle souvent de fonctions personnalisées quand on écrit soi-même les instructions. 
  // Mais on parle aussi de fonctions PHP ou prédéfinies quand on utilise une commande qui effectue une tâche, comme pr exemple
  // "strval", "strtotime", ou d'autres encore.


  /*
    NOTION DE PORTEE DE VARIABLE

    La portée de variables indique l'emplacement dans lequel elle est accessible. 
    Une variable peût-être locale ou globale.
    * Toutes variables définies en dehors d'une fonction ont une portée globale.
    * Toutes variables définies à l'intérieur de la fonction auront une portée locale à la fonction. 
      Cela signifie que la variable ne sera accessible qu'au sein de la fonction et sera détruite des la fin de ladite fonction.
    Toute variable définie dans une fonction avec le mot clé global sera considéré comme global et pourra changer de valeur dans 
    les différents scripts.
  */

      function bonjour(){
        print("Salut John");
      } 
      bonjour();
      echo "<br>";

      function bonjour1($prenom){ //prenom est un paramètre
        print("Salut ".$prenom);
      }
      bonjour1("Maddie"); //Maddie est un argument

      //Opérateur numérique dans les fonctions
      function addition($nbre, $nbre2){
        $resultat = $nbre + $nbre2;
        echo "<br>".$resultat;
      }
      addition(1,2);
      echo "<br>";

      function calculTVA(){
        return 100*1.2;
      }
      //J'exécute ma fonction calculTVA en l'appelant
      echo "Fonction de calcul de la tva1, ajouter 20% à 100 = ".calculTVA()."<br>";

      function calculTVA2($nombre){
        return $nombre*1.2;
      }
      echo "Fonction de calcul de la tva2, ajouter 20% à 500 = ".calculTVA2(500)."<br>";
      echo "Fonction de calcul de la tva2, ajouter 20% à 2500 = ".calculTVA2(2500)."<br>";

      function calculTVA3($montant, $taux){
        return $montant * $taux;
      }
      echo "500€ avec un taux de 5.5% font ".calculTVA3(500,1.055)."<br>";
      echo "4000€ avec un taux de 20% font ".calculTVA3(4000,1.2)."<br>";

      function afficherDate($jr, $mois, $annee){
        echo $jr.' '.$mois.' '.$annee;
      }
      afficherDate(25, "octobre", 2023);
      echo "<br>";

      function volume($largeur, $longueur, $hauteur){
        echo "Le volume est : ".$largeur*$longueur*$hauteur." cm3";
      }
      volume(10,10,10);
      echo "<br>";

      function test($nom){
        echo $nom;
      }
      test("Albert");
       echo "<br>";

      function calcul_remise($h1){
        global $taux_remise;
        $taux_remise = 0.3;
        return $h1 * $taux_remise;
      }
      //Je définis une fonction qui calcul la tva
      function calcTVA($h2){
        global $taux_tva;
        $taux_tva = 0.2;
        return $h2*$taux_tva;
      }
      $ht = 100;
      //Je récupère la remise à déduire
      $remise = calcul_remise($ht);
      echo "La remise est : ".$remise."<br>";
      //Je récupère la tva à ajouter
      $tva = calcTVA($ht);
      echo "La tva est : ".$tva."<br>";
      //Calcul ttc
      $ttc = $ht - $remise + $tva;
      //Je récupère le ttc
      echo "Le ttc est : ".$ttc."<br>"

      




    ?>
      
    </div>