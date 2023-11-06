<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <div class="content">
        <h1>Les boucles</h1>
    <?php
        $hab = 15230;
        echo $hab;
        echo "<br>";

        $hab = 102;
        echo $hab;
        echo "<br>";

        $ville = "origine";
        $dep = "centre";
        $titre = $ville.$dep;

        echo $titre;
        echo "<br>";

        $nn = "Salut";
        $mm = "Bob";
        $pp = "copain";

        $affich = $nn.' '.$mm. ', tu veux être mon ' .$pp. ' ? ';
        echo $affich;
        echo "<br>";

        $a = 1;
        $b = 3;
        $a = $a + 2;
        echo " Premier : " .$a;
        echo "<br>";

        $a = $a * $b;
        echo "Dexième : " .$a;
        echo "<br>";

        $a = $a - 1;
        echo "Troisième : " .$a;
        echo "<br>";

        $a = $a/4;
        echo "Quatrième : " .$a;
    ?>
    </div>
</body>
</html>