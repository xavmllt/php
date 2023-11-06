<?php
 // interroger une base de donnée à l'aide de l'API mySQLi   
/**
    * on interroge les informations d'une table (BDD) par l'intermédiaire d'une requête SQL qui renvoie un jeu de résultat qu'on affiche par la suite dans le navigateur (ou client).
*/

$cnx = mysqli_connect('localhost', 'root', 'root', 'casse2');

if(mysqli_connect_errno()){
    echo 'Erreur de connexion à la base'.mysqli_connect_error();
}
// je définie la requête 
$sql = 'SELECT * FROM personne ORDER BY NumAch asc';
if($result = mysqli_query($cnx, $sql)){
    echo 'Pour cette requête <br>'.$sql.'<br><br>';
    echo 'il y a : '.mysqli_num_rows($result).' réponses<br>';
    echo '<br><br>';
    echo '<html><style>';
    echo 'table, th, td{
        border: 1px solid black;
        text-align: center;
        }';
    echo '</style>';
    echo '<body><table width=500>';
    echo '<th>'.'NumAch'.'</th>';
    echo '<th>'.'Nom'.'</th>';
    echo '<th>'.'Âge'.'</th>';
    echo '<th>'.'Ville'.'</th>';
    echo '<th>'.'Sexe'.'</th>';
    // pour l'ensemble des lignes du jeu de résulats, répète :
    while($row = mysqli_fetch_row($result)){
        echo '<tr>';
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '<td>'.$row[3].'</td>';
        echo '<td>'.$row[4].'</td>';
        echo '</tr>';
    }
    echo '</table></body></html>';
    // annule le jeu de résultat
    mysqli_free_result($result);
}
// ferme la connexion à la base de donnée
mysqli_close($cnx);


/*
    L'expression mysqli_num_row($result) renvoie le nombre de lignes dans le jeu de résultat qui est issue de la requête.

    L'expression $result = mysql_query($cnx, $sql) se connecte à la base de données par l'intermédiaire de la variable déjà validée $cnx et utilise la requête spécifié dans la variable $sql pour extraire un jeu de résultats qui est placé dans la variable $result.

    L'expression mysqli_fetch_row(to fetch qui signifie entre autre aller chercher quelqu'un) récupère une ligne d'information dans le jeu de résultats et la renvoie en tant que tableau associatif où chaque colonne représente les champs. Chaque nouvel appel à mysqli_fetch_row() renverra la prochaine ligne dans le jeu de résultats ou la valeur NULL s'il n'y a plus de ligne.

    Par conséquant, l'expression while(row = mysqli_fetch_row($result)) signifie "tant qu'il y a encore des lignes dans le jeu de résultats, répète les actions ci-dessous".

    ** Quelques fonctions mySQL **
    Pour gérer les informations dans une BDD avec PHP, on utilise communément des fonctions mysqli.

    Opérateurs SQL                  ||      Description
    mysqli_affected_row                     Renvoie le nombre de lignes affectées par la dernière requête   
    
    mysqli_close                            Ferme une connexion

    mysqli_begin_transaction                Commence une transaction

    mysqli_connect_error                    Renvoie un message d'erreur

    mysqli_errno                            Renvoie le dernier message d'erreur 

    mysqli_get_client_info                  Renvoie des informations sur la librairie du client mysql

    mysqli_query                            Exécute une requête SQL
*/
?>