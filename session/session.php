<?php
session_start();
if($_SESSION["autoriser"] != "oui"){
    header("location:login.php");
    exit();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session en php</title>
</head>
<body>
    <h1>Page confidentielle <a href="deconnexion.php">Déconnexion</a></h1>
    <div>Félicitations, vous vous êtes authentifiés avec succès</div>
</body>
</html>