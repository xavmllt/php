<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher</title>
</head>
<body>
    <div class="content">
        <h1>Recherche</h1>

        <form action="" method="post">
            Rechercher un nom : <input type="text" name="recherche">
            <input type="submit" value="rechercher">
        </form>

        <?php

        $db_serveur = 'localhost'; // adresse du serveur Mysql
        $db_user = 'root';  // nom de l'utilisateur
        $db_user_pass = 'root'; // mot de passe
        $db_name = 'casse2'; // nom de la base de donnée

        // J'ouvre une connexion au serveur mysql
        $con = mysqli_connect($db_serveur, $db_user, $db_user_pass, $db_name);

        // Je récupère la recherche 
        $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

        // J'écris la requête sql
        $q = $con -> query(
            "SELECT nom, ville FROM personne WHERE nom LIKE '%$recherche%' OR ville LIKE '%$recherche%' LIMIT 10");

            // J'affiche le resultat
            while($r = mysqli_fetch_array($q)){
                echo 'Résultat de la recherche : '.$r['nom'].', '.$r['ville'].'<br>';
            };
        ?>
    </div>
</body>
</html>