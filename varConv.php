<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Conversion Variables</title>
</head>
<body>
    <div class="content">
        <h1>Conversions de variables</h1>
            <?php
                $var = '3.5 kilomètres';
                $var2 = (double) $var;
                echo '$var2 = '.$var2.'<br>'; // affiche 3.5
                $var3 = (integer) $var2;
                echo '$var3 = '.$var3.'<br>';
                $var4 = (boolean) $var3;
                echo '$var4 = '.$var4.'<br>';

                /**
                 *  Vous avez la possibilité de modifier le type de la variable elle-même au moyen de la fonction settype().
                 */

                echo settype($var, 'float');
                echo '<br>';
                echo '<br>';
                echo 'Utilisation de settype()';
                echo '<br>';
                $vall = '35.5 ans';
                settype($vall, 'double');
                echo '$val = '.$vall.'<br>';
                echo '<br>';
                settype($vall, 'integer');
                echo '$vall = '.$vall.'<br>';
                echo '<br>';
                settype($vall, 'boolean');
                echo '$vall = '.$vall.'<br>';


                // CONTRÔLER L'ÉTAT D'UNE VARIABLE

                /**
                 * Lors de l'envoie de données d'un formulaire vers le serveur, le script qui reçoit les informations doit pouvoir détecter l'existence d'une réponse dans les champs du formulaire. Les fonctions isset() et empty() permettent ce type de contrôle.
                 * 
                 * La fonction isset() retourne false ou 0 si la variable existe mais n'est pas initialisée ou si elle a la valeur NULL, et la retourne TRUE ou 1 si elle a une valeur quelconque. Il peut y avoir plusieurs paramètres dans cette fonction mais ils doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.
                 * 
                 * La fonction empty() retourne la valeur TRUE si l'expression passé en paramètre n'est pas initialisé, a une des valeurs suivantes : NULL, FALSE, la chaine "0", ou est un tableau vide, et la valeur FALSE si elle a une quelconque autre valeur.
                 */

                $a = null;
                if(isset($a)){
                    echo '$a existe déjà <br>';
                }else{
                    echo '$a n\'exxiste pas <br>';
                };

                if(empty($a)){
                    echo '$a est vide <br>';
                }else{
                    '$a a la valeur '.$a.'<br>';
                };
                // il est censé afficher : $a n'existe pas et $a et vide

                $b = 0;
                if(isset($b)){
                    echo '$b existe déjà <br>';
                }else{
                    echo 'b n\'existe pas';
                };

                if(empty($b)){
                    echo '$b est vide <br>';
                }else{
                    echo '$b a la valeur '.$b.'<br>';
                };


                $c = 1;
                if(isset($c)){
                    echo '$c existe déjà <br>';
                }else{
                    echo '$c n\'existe pas <br>';
                };

                if(empty($c)){
                    echo '$c est vide <br>';
                }else{
                    echo '$c a la valeur'.$c.'<br>';
                };


                /**
                 * Pour la variable $a qui a la valeur NULL, isset() retourne également FALSE et empty() TRUE. Pour $b, qui a la valeur 0, isset() permet de détecter l'existence de cette variable bien que empty() la déclare vide. Il en irait de même si $b était une chaîne vide.
                 * 
                 * Pour une valeur numérique affectée à la variable $c, les deux fonctions retournent TRUE. Ces fonctions, et en particulier isset(), vous permettront de vérifier si un utilisateur a bien rempli tous les champs d'un formulaire.
                 */

                // LES ENTIERS
                /**
                 * 
                 */
                $entier = 0b1101;
                echo $entier;
                
            ?>
    </div>
</body>
</html>