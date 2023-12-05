<?php
$dsn = "mysql:host=localhost;dbname=maBase";
$user = "root";
$password = "root";

try{
    $cnx = new PDO($dsn, $user, $password);
    $cnx = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ici l'attribut des erreurs est défini en mode d'affchage ERRMODE_EXCEPTION
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
?>