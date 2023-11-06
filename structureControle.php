<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
</head>
<body>
    <header>
            <nav>
                <a href="#">Accueil</a>
                <a href="#">Présentation</a>
                <a href="#">contact</a>
            </nav>
    </header>
        <div class="content">
            <h1>Voici mon contenu</h1>
            <!-- LES STRUCTURE DE CONTRÔLE EN PHP -->
    <!-- Elles permettent d'éxecuter des blocs en fonction d'une condition qui doit être vérifiée. On distingue les structures conditionnelles (ou test) et les structures de boucles.

    Les structures conditionnelles : if, if...else et elif ou switch et les ternaires -->
    <?php
        // test if
        $a = 7;
        if($a >1){
            echo "La variable $a est plus grande que 1.";
        };
        echo "<br />";
        echo "<br />";

        // test if...else
        $b = 5;
        $c = 1;
        if($a > $b){
            echo "La variable $b est plus grande que $c.";
        }else{
            echo "La variable $b est plus petite ou égal à $c";
        };

        echo "<br />";
        echo "<br />";

        // test elseif
        $d = 5;
        $e = 6;
        if($d > $e){
            echo "La variable $d est plus petite que $e.";
        }elseif($d > $e){
            echo "La variable $d est plus grande que $e.";
        }else{
            echo "La variable $d est egal à $e";
        };

        echo "<br />";
        echo "<br />";


        // opérateur de comparaison
/*
        == égale à
        != différent de
        > strictement supérieure à
        < strictement inférieur à
        >= supérieur égale à
        <= inférieur égale à
*/

        // on utilise la fonction var_dump() pour observer le comportement de nos tests. Elle renvoie une valeur boolenn(True or False).
        $nbre = 5;
        $nbre2 = 10;
        var_dump($nbre == $nbre2);
        echo "<br />";
        var_dump($nbre != $nbre2);
        echo "<br />";
        var_dump($nbre > $nbre2);
        echo "<br />";
        var_dump($nbre < $nbre2);
        echo "<br />";
        var_dump($nbre >= $nbre2);
        echo "<br />";
        var_dump($nbre <= $nbre2);

        echo "<br />";
        echo "<br />";

        
        // Les opérateurs logiques
        /* permettent de combiner des tests et des conditions. */
        $nb = 15;
        $nb1 = 8;
        $nb2 = 1;

        if($nb && $nb1 && $nb2){
            echo "Les variables $nb, $nb1, $nb2 contiennent des valeurs différentes. <br />";
        }else{
            echo "Une des varaibles contient false comme valeur. <br />";
        };

        if($nb >= 10 || $nb1 >= 10 || $nb2 >= 10)
            echo "La variable $nb2 a une valeur équivalente à false. <br />";
        if(!$nb2){
            echo "La variable $nb2 a une valeur équivalente à false. <br />";
        }else{
            echo "La variable $nb2 a une valeur équivalente à true. <br />";
        };
    ?>
        </div>
        <footer>
            &copy;DWWM 2023
        </footer>
    

</body>
</html>