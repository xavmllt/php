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


    Gestion d'une erreur éventuelle de connexion
    Si pour une raison quelconque, une erreur de connexion à la base de données survenait, nous allons gérer cette erreur et non la subir. En effet, en cas d'erreur, mySQL renvoie un message d'erreur à notre base de données et nous allons modifier le login de la varaible $user et ajouter un mot de passe à notre variable $password, afin de générer une erreur de connexion. Puis nous initialisons l'objet PDO.
*/
    $dsn = "mysql:host=localhost;dbname=mabase";
    $user = "toto";
    $password = "tata";
    $cnx = new PDO($dsn, $user, $password);
/*
    Ensuite nous lançons la page dans le browser. Nous nous attendons à une erreur, puisque le couple user/password n'est pas correct.
    Nous pouvons observer une faille de sécurité indéniable. Le couple user/password apparait clairement.
    Pour rémédier à cela, nous allons utiliser les blocs TRY/CATCH. 

    *** Le couple TRY/CATCH 
    Le couple TRY/CATCH va nous permettre de pouvoir gérer une erreur de connexion à la base de données et d'en personnaliser le message.
    --- Principe de fonctionnement
    TRY va tenter de se connecter à la base de données et si il y a une erreur, CATCH fera en sorte de renvoyer un message d'erreur que nous allons personnaliser. Cette erreur sera délcarée sous la forme d'une exception.
*/
    try{
        $cnx = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        echo "Une erreur est survenue !";
    };
/*
    Nous relançons la page dans notre navigateur et cette fois, le message d'erreur qui va s'afficher sera le suivant : "Une erreur est survenue !".

    Conclusion :
    Vous venez d'apprendre à vous connectez à une base de données en utilisant l'objet PDO de PHP.
    nb : En cas de problème, tout ce qui se trouve à l'intérieur du TRY sera stoppé au profit de ce qui se trouve à l'intérieur du CATCH. Et si tout vas bien, alors seulement ce qui se trouve à l'intérieur du TRY sera exécuté.
*/

/*
    AFFICHER DES SONNEES AVEC PDO

    Ecriture de la requête

    $sql = SELECT * FROM clients;

    Exécution de la requête

    Pour exécuter cette requête nous récupérons l'objet PDO et nous effectuons une requête query. Nous stockons cette requête dans une variable nommée $rs_req.
*/
    $rs_req = $cnx->query($sql);
/*
    Nous allons maintenant récupérer les donnéees de notre requête. Pour cela nous utilisons une boucle while ainsi que la méthode fetch(). On affecte à la variable $données, chaque enregistrement de la table clients.
*/
    while($donnees = $rs_req->fetch()){
        echo "<pre>";
        print_r($donnees);
        echo "</pre>";
    };
/*
    On obtient chaque ligne de notre table clients, rangée dans un tableau (Array) et chaque tableau (array) contient :
        - un tableau associatif
        - un tableau numérique

    Conclure :
    Par défaut, le comportement de PDO est d'envoyer la méthode fetch() avec en retour un tableau associatif et un tableau numérique.

    
    ** L'association PDO::FETCH_ASSOC
    Nous pouvons modifier ce comportement en précisant le type d'association à utiliser. Pour cela, nous allons ajouter à la méthode fetch(), le type d'association que nous souhaitons voir apparaitre. Pour faire apparaitre uniquement le résultat sous la forme d'un tableau associatif, nous écrirons : PDO::FETCH_ASSOC, à la méthode fetch().

    ** L'association PDO::FETCH_BOTH
    Par défaut, la constante utilisée par PDO est PDO::FETCH_BOTH, qui signifie envoyer les deux tableaux (associatif et numérique).

    ** L'association PDO::FETCH_OBJ
    Une quatrième constante peut être utilisée, PDO::FETCH_OBJ, qui donne en retour un objet. Le code suivant identique au précédent à la différence de l'ajout du type PDO::FETCH_OBJ à la méthode fetch().
*/
    while($donnees=$rs_req->fetch(PDO::FETCH_OBJ)){
        echo "<pre>";
        print_r($donnees);
        echo "</pre>";
    };
/*
    Dans la pratique, on utilise le plus souvent les deux types d'associations : ASSOC et OBJ.

    **** Gestion des erruer sql
    Comme nous l'avons fait à l'initialisation de l'objet PDO lors de la mise en place de la connexion à notre base de données, nous allons protéger nos requêtes SQL, en bloquant le code en cas d'erreur, grâce au couple TRY/CATCH.
    Pour cela nous allons d'abord définir un attribut à notre variable de connexion à la base de données : $cnx, afin de modifier l'affichage des erreurs.
    Cela donnera :
    $cnx->setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    a- Les différents types d'affichage des erreurs
    Il est existe trois types d'affichage des erreurs :
        - ERRMODE_SILENT (Affichage par défaut);
        - ERRMODE_WARNING
        - ERRMODE_EXCEPTION
    
    Nous allons voir les trois types d'affichage d'erreurs. Nous allons provoquer une erreur SQL en faisant une requête non pas dans la table clients mais dans la table client qui n'existe pas. Notre requête SQL deviendra alors :
    $sql = "SELECT * FROM client";

    --- Premier type d'affichage des erreurs sql : ERRMODE_SILENT
    ERRMODE_SILENT est le mode d'affichage par défaut. Ce mode d'affichage affiche une erreur sans en préciser la cause.

    try{
        $cnx = new PDO($dsn, $user, $password);
        $cnx = setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); // ici l'attribut des erreurs est défini en mode d'affchage ERRMODE_SILENT
        echo "Tout s'est bien passé !";
    }catch(PDOException $e){
        echo "Une erreur est survenue !";
    };

    --- Deuxième type d'affichage des erreurs sql : ERRMODE_WARNING
    ERRMODE_WARNING permet d'afficher le détail de l'erreur. Ce mode peut être opportun en cours de développement afin d'identifier rapidement les erreurs éventuelles. Notre code ressemblera à ceci :
    
    try{
        $cnx = new PDO($dsn, $user, $password);
        $cnx = setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // ici l'attribut des erreurs est défini en mode d'affchage ERRMODE_WARNING
        echo "Tout s'est bien passé !";
    }catch(PDOException $e){
        echo "Une erreur est survenue !";
    };

    --- Troisième type d'affichage des erreurs sql : ERRMODE_EXECPTION
    ERRMODE_EXECPTION permet en cas d'erreur, d'envoyer une exception. Cela nous permet donc de récupérer cette exception au travers du couple TRY/CATCH et ainsi de personnaliser le message d'erreur qui apparaitra à l'écran.

    try{
        $cnx = new PDO($dsn, $user, $password);
        $cnx = setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ici l'attribut des erreurs est défini en mode d'affchage ERRMODE_EXCEPTION
        echo "Tout s'est bien passé !";
    }catch(PDOException $e){
        echo "Une erreur est survenue !";
    };

    $sql = "SELECT * FROM client"; // la requête faussée
    // Ici la requête est éxécutée. Si elle fonctionne, le script jouera uniquement le TRY. Si elle ne fonctionne pas, le script ira directment jouer le CATCH.
    try{
        $rs_req = $cnx->query($sql);
        while($donnees=$rs_req->fetch(PDO::FETCH_OBJ)){
            echo "<pre>";
            print_r($donnees);
            echo "</pre>";
        }
    }
    catch(PDOException $e){
        echo "Un problème est survenu !";
    }


    Nous venons de voir les bases de la mises en place de la classe PDO


*/

?>