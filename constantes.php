<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LES VARIABLES</title>
</head>
<body>
    <?php
        // Définitions
        define('PI', 3.1415926535);

        // Utilisation
        echo 'La constante PI vaut ', PI, '<br>';
        echo 'PI arrondit à 2 chiffres apès la virgule : '.round(PI, 2).'<br><br>';


        $ip = $_SERVER['REMOTE_ADDR'];
        $nv = $_SERVER['HTTP_USER_AGENT'];

        echo 'Adresse IP du client : '.$ip.' Avec le navigateur : '.$nv.'<br><br>';


        $nom = 'Marie Rose';
        echo 'Le nombre de caractère est de : '.strlen($nom).'<br>'; // affiche le nombre de caractère
        var_dump($nom);








    ?>
</body>
</html>