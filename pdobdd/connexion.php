<?php
$dsn = "mysql:host=localhost;dbname=maBase";
$user = "root";
$password = "root";

try{
    $cnx = new PDO($dsn, $user, $password);
}catch(PDOException $e){
    echo "Une erreur est survenue !";
};

$sql = "SELECT * FROM clients";
$rs_req = $cnx->query($sql);
while($donnees = $rs_req->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";
    print_r($donnees);
    echo "</pre>";
};
?>