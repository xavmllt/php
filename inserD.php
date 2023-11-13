<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1>INSERER ICI</h1>

        <?php
        /*
            Insérer les données dans mySQL

            Pour ins&rer de nouveaux enregistrements dans une table, on se sert de la commande SQL insert into.
            Les chaînes sont placées entre apostrophes, exécepter pour les valeurs numériques ou la valeur NULL, s'il n'a pas de données à insérer. Il y a autant de valeurs que de champs
        */

        $con = mysqli_connect('localhost', 'root', 'root', 'casse2');
        if(mysqli_connect_errno()){
            echo 'Erreur de connection à la base '.mysqli_connect_error();
            exit();
        };

        // on crée la requête SQL
        $sql = 'INSERT INTO personne (NumAch, Nom, Age, Ville, Sexe) VALUES (\'\', \'Alain\', 32, \'Manchester\', \'M\')';
        // echo 'insertion réalisé avec succès !';

        $result = mysqli_query($con, $sql) || die ('Echec de la requête insert');

        // ferme la connexion à la BDD
        mysqli_close($con);
        ?>
    </div>
</body>
</html>