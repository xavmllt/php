<?php
/*
    LA CLASSE PDO

    Le rôle de la classe PDO est de servir d'interface d'accès à une base de donnée, pour votre site internet.
    Objectif :
        - découvrir les fonctionnalitées de cette classe PDO.
        - séléectionner, insérer, modifier et supprimer des données.

    Qu'est ce que PDO ?
    PDO signifie PHP Data Objects. PDO est une extension PHP orienté objet incluse depuis la version 5.1 de PHP, dont le rôle est de servir d'interface d'accès à une base de donnée.
    L'objet PDO permet donc de communiquer avec une base de donnée, et ceci peu importe le type SGBD (Mysql, Oracle, etc...).

    CONNEXION À UNE BASE DE DONNÉE
    Auparavant, pour nous connecter à une base de donnée, nous utilisions la fonction mysqli_connect().
    Cette fonction est devenue totalement obsolète avec l'arrivé de PHP 7. Elle a été remplacée par deux nouvelles extensions : PDO et Mysqli.

    PDO pour se connecter à une base de donnée
    --- Définition des variables de connexion
    Nous allons commencer par définir nos variables de connexion :
*/
    $dsn = "mysql:host=localhost;dbname=maBase";
    $user = "root";
    $password = "root";
/*
    Expliquations : 
        $dsn : contient le type de la base de donnée, l'adresse du serveur (ici localhost) ainsi que le nom de la bdd (ici maBase).
        $user : contient le login de la connexion à la bdd (ici root).
        $password : contient le mot de passe de connexion à la bdd (ici root).

    --- Initialisation de l'objet PDO
    Une fois nos variables de connexion définies, nous devons ensuite initialiser l'objet PDO, comme ceci :
*/
    $cnx = new PDO($dsn, $user, $password);
/*
    Expliquations :
        Nous initialisons l'objet PDO et nous le stockons dans une variables nommée $cnx. $cnx contient tous les paramètres de connexion de notre base de données.

    Concllusion :
    Nous venons de créer un objet PDO pour nous connecter à notre base de données mysql.
*/
?>