<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion base de données</title>
</head>
<body>
    <div class="content">
        <h1>Connexion BDD</h1>
    <?php
        /* se connecter à une base de donnée MySQL

            Pour travailler avec des informations stickées dans une base de données mySQL sur Internet, vous devez d'abord vous connecter au serveur stockant la base, sélectionner la base de donnée et enfin écrire des requêtes SQL qui interrogent puis renverront ce que vous souhaitez à l'intérieur de la page web du client (ou navigateur).

            Deux différentes API :
            Les instructions mySQL qui permettent d'accéder aux tables d'une base de données sont regroupé dans deux API (Application Programming Interfaces) qui sont des groupes de fonctions :
            
            * Le groupe mySQLi : les fonctions de ce groupes sont réserves aux bases de données mySQL.
            * Le groupe PDO : les fonctions issues de ce groupe peuvent accéder à plusieurs SGBDR différentes.

            Pour pouvoir se connecter à une base de donnéess, il faut fournir au moins le nom serveur, un nom d'utilisateur et un mot de passe : ex: localhost, root, '';
            Mais dans le cas d'un vrai serveur (serveur de production), c'est votre fournisseur (ex: OVH, 01.net, etc.) qui indiquera ces paramètres.

            On peut écrire des scripts PHP soit de manière procédurale avec l'API MySQLi, soit avec le modèle orienté objet et l'API PDO. Mais dans ce cas, il faut gérer les excéptions (les erreurs) qui peuvent se produire parce que le moteur PHP laisse une trace accessible de ce qui s'est passé au niveau de la connexion, comme le nom de l'utilisateur et le mot de passe. La gestion des erreurs s'effectuent avec le try...catch. 
        */


        // connextion vers le server avec l'API mySQLi
        $serv_name = 'localhost';
        $user = 'root';
        $password = 'root';

        // je crée la connexion vers le serveur
        $connexion = mysqli_connect($serv_name, $user, $password);

        // je teste si la connexion a réussi
        if(!$connexion){
            // j'arrête la connexion 
            die('Echec de connexion'.mysqli_connect_error());
        };
        echo 'connexion reussi';     
    ?>
    </div>
</body>
</html>