<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
        <div class="content">
            <h1>Les boucles</h1>
            <!-- Elles permettent d'exécuter plusieurs fois des blocs de code en fonction de la valeur d'une variable.
        On distingue, les boucles while, for, foreach -->
    <?php
        // La boucle while
    /*
        Elle exécute un bloc de ligne de code tant qu'une condition est vraie.
    */
        $a = 1;
        // Tant que la variable est inférieur à 10
        while($a <= 10){
            echo "La valeur est : $a <br />";
            // j'incrémente la valeur de $a
            $a++;
        };

        echo "<br />";
        echo "<br />";
        echo "<br />";

        // La boucle DO...WhILE
    /* 
        Cette boucle ressemble à la précédente mais le code est exécuter avant la condition ne soit testée. En d'autres termes, vous êtes sur que le premier passage sera effectué dans la boucle même si la condition s'avère fausse.
    */
        echo "LA BOUCLE DO...WHILE";
        // Je définis l'environnement en français 
        setlocale(LC_TIME, ['fr', 'fra', 'french']);

        // J'initialise une variable
        $nombre = 0;
        do{
            // Je récupère la date du jour avec un formatage et le nombre du jour 
            $d1 = date("d/m/Y", strtotime('+'.$nombre.days));

            // J'affiche la date
            echo "<p>".$d1."</p>";

            // J'incrémente la variable
            $nombre++;
        }
        // Tant que la variable est inférieur ou égale à 15
        while($nombre <= 15);
        

        // NOTION D'INCREMENTATION ET DE DECREMENTATION
        echo "<br />";
        echo "NOTION D'INCREMENTATION ET DECREMENTATION";
        echo "<br />";
        $x = 20;
        echo $x;
        echo "<br />";

        $y = 12;
        echo $y;
        echo "<br />";
        $x++; // INCREMENTE
        $y--; // DECREMENTE
        echo 'La variable $x est incrémenter et vaut : '.$x.' et $y est décrémenter et vaut : '.$y.' .';

        // LA BOUCLE FOR
    /*
        * Elle indique de répéter une action un certains nombre de fois en fonction de la valeur d'un pointeur. La structure possède trois paramètres:
        * un début, un test et une incrémentation qui s'éffectuent à la fin de chaque passage dans la boucle.
    */
        echo "<br />";
        echo "<br />";
        echo "BOUCLE FOR";
        echo "<br />";
        for($p = 0; $p <= 5; $p++){
            echo "Je dis bonjour avec la boucle for : $p. <br />";
        }

        echo "<br />";
        echo "<br />";
        // LA BOUCLE FOREACH
        echo "BOUCLE FOREACH";
        echo "<br />";
        $T["Janvier"] = "Ecole";
        echo "<br />";
        $T["Septembre"] = "Vacances";
        foreach($T as $mois =>$periode){
            echo $mois . " ===> " .$periode. "<br />";
        }
    ?>
        </div>
</body>
</html>