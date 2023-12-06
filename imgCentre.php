<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>Gestion des images</h1>

<?php
/*
PHP permet non seuelment de créer des pages contenant du texte affiché dynamiquement mais également des images dynamiques en fonctions des besoins. Il est question ici de voir comment créer des images aux formats gif, jpeg, png et même wbmp à destination des terminaux mobiles.
PHP est livré avec l'extension GD(Graphic Device). La version actuelle, livrée vous permet de créer des images au formats cités plus haut.
*/
// echo phpinfo();

/* Principe généraux

    Sur le serveur locale installé par WampServer ou MAMP, l'extension GD est installée par défaut. Sur un serveur sur lequel elle ne serait pas disponible, vous devez décommenter la ligne suivante en supprimant le point-virgule au début de la ligne :
    extension=php_gd2.dll
    Cette ligne se trouve dans le fichier php.ini

    Les scripts de création d'image doivent suivre les étapes suivantes : 
    1. Envoie d'un entête précisant le type d'image qui sera envoyé du serveur vers le navigateur. On trouve aussi la fonction header() sous la forme suivante pour une image de type PNG : 
        header("Content-type:image/png");
    
    2. Création du cadre de l'image dans lequel vont être tracés les éléments de l'image en appelant la fonction imagecreate(), qui définit les dimensions de l'image en pixels et réserve l'espace mémoire nécessaire sur le serveur.

    3. Création des couleurs qui vont être utilisées pour effectuer les tracés en utilisant les codes décimaux des couleurs RGB (Red, Green, Blue) à l'aide  de la fonction imagecolorallocate().

    4. Tracé des formes géométriques dans le cadre. Les formes disponibles sont variées.

    5. Écriture du texte dans l'image à l'aide des polices incorporées ou de police TrueType ou FreeRType.

    6. Envoie de l'image créer vers le navigateur ou dans un fichier image enregistré sur le serveur et utilisable dans n'importe quelle page ou image au moyen de l'élément HTML <img>.

    7. Libération facultative de l'espace mémoire occupé par l'image sur le serveur à l'aide de la fonction imagedestroy().
*/
header("Content-type: image/png");

// Création du cadre 800x40 pixels
$id_img = imagecreate(800, 400);

// Création des couleurs
$fond = imagecolorallocate($id_img, 255, 255, 51);
$noir = imagecolorallocate($id_img, 0, 0, 0);


// TRACÉ DES FORMES
// Enregistre l'image dans un fichier
imagepng($id_img, "imagedwwm.png");
// Envoie de l'image au navigateur
imagepng($id_img);
// Libération de la mémoire
imagedestroy($id_img);
?>
    </div>

</body>
</html>