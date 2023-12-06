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
header("image/png");
$monimg = imagecreate(800, 400);
$fond = imagecolorallocate($monimg, 255, 255, 51);
$noir = imagecolorallocate($monimg, 0, 0, 0);
// Définition de l'épaisseur de trait de 2 pixels
imagesetthickness($monimg, 2);

// Tracé des droites
for($x = 0; $x < 800; $x += 10){
    imageline($monimg, 400, 399, $x, 0, $noir);
}
imagepng($monimg, "rayons.png");
imagedestroy($monimg);
?>
    </div>

</body>
</html>