<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <div class="content">
        <h1>Les conditions</h1>
    <?php
        // appli remise
        $tarif = 1000;
        $remise = 0.05;
        $prix_net = $tarif * (1 - $remise);
        echo $prix_net;

        if($prix_net > 1500){
            echo "<br /> Super!!";
        }elseif($prix_net > 1000){
            echo "<br /> Acceptable !";
        }else{
            echo "<br /> On signe ou ?";
        };

        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "Début de mon applocation code postal";
        echo "<br />";
        echo "// -------------------------------- //";
        echo "<br />";
        echo "<br />";
        // end appli remise

        // appli code postal
        $code_postal = "23000";
        if(substr($code_postal, 0,2) == "45"){
           echo "Orléans"; 
        }elseif(substr($code_postal, 0,2) == "75"){
            echo "Paris";
        }elseif(substr($code_postal, 0,2) == "69"){
            echo "Lyon";
        }elseif(substr($code_postal, 0,2) == "29"){
            echo "Quimpère";
        }elseif(substr($code_postal, 0,2) == "94"){
            echo "Saint Maur";
        }else{
            echo "Province";
        };


        echo "<br />";
        echo "//------------------------------//";
        echo "<br>";

        // appli code postal avec switch
        $codePost = "29350";
        switch(substr($codePost, 0,2)){
            case "69":
                echo "Lyon";
                break;
            case "33":
                echo "Bordeaux";
                break;
            case "31":
                echo "Toulouse";
                break;
            case "45":
                echo "Orléans";
                break;
            case "18":
                echo "Bourges";
                break;
            case "13":
                echo "Marseille";
                break;
            default:
            echo "Ailleurs";
        };
        /* Avec le switch, le code peut tester plusieurs cas les uns à la suite des autres. Mais switch ne peut tester que des égalités contrairement à if...elseif...else où toutes les comparaisons sont possibles. */

        echo "<br />";
        echo "//---------------------------------//";
        echo "<br />";

        // Test avec la condition ternaire
/*
        Les conditions ternaires sont des expressions dans lesquelles les conditions vraies et fausses sont écrite sur une même ligne
*/
        $c_postal = "75008";
        echo (substr($c_postal, 0,2)) == "75" ? "Paris" : "Province";
    ?>
    </div>
</body>
</html>