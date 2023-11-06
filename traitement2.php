<?php
    foreach($_POST as $name => $value){
        echo $name.'='.$value.'<br>';
    };

    var_dump($_POST).'<br>';
    $f = fopen("sauvegarde.txt", "a");
    fwrite($f, $_POST['prenom'].' - ');
    fwrite($f, $_POST['nom'].'\n');
    fwrite($f, $_POST['adresse'].'\n');
    fwrite($f, $_POST['ville'].'\n');
    fwrite($f, $_POST['cp'].'\n');
    $f = fclose($f);
?>