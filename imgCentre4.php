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
header("image/gif");
$mypicture = imagecreate(800, 400);
$fond = imagecolorallocate($mypicture, 255, 255, 51);
$rouge = imagecolorallocate($mypicture, 255, 0, 0);

// Définition de l'épaisseur de trait de 3 pixels
imagesetthickness($mypicture, 3);
// Tracé des rectangles
for($i = 3; $i < 100; $i++){
    imagerectangle($mypicture, $i, $i, 800 - $i, 400 - $i, $rouge);
};

// Tracé d'un rectangle plein
imagefilledrectangle($mypicture, 100, 100, 700, 300, $rouge);
imagegif($mypicture, "rectangle.gif");
imagedestroy($mypicture);
?>
    </div>

</body>
</html>