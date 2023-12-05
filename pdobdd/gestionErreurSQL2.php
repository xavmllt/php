<?php
$dsn = "mysql:host=localhost;dbname=maBase";
$user = "root";
$password = "root";

try{
    $cnx = new PDO($dsn, $user, $password);
    $cnx = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(PDOException $e){
    echo "Une erreur est survenue !";
};

$sql = "SELECT * FROM client";
$rs_req = $cnx->query($sql);
while($donnees = $rs_req->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";
    print_r($donnees);
    echo "</pre>";
};
?>