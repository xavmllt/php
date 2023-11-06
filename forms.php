<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
    <style>
        fieldset{
            border: double medium red;
            padding: 20px;
        }

        input[type=text], input[type=date]{
            /* Largeur de la zone de saisie */
            width: 200px;
            /* Position absolute qui ne dépend pas des autres objets */
            position: absolute;
            /* Position gauche */
            left: 160px;
            /* Famille police */
            font-family: sans-serif;
            /* Taille des caractères */
            font-size: 14px;
        }

        label{
            font-family: sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h4>Formulaire DWWM</h4>
        <form action="traitement2.php" method="POST">
            <fieldset>
                <legend>Identité</legend>

                <label for="">Prénom :</label>
                <input type="text" name="prenom" size="30"> <br><br>

                <label for="">Nom :</label>
                <input type="text" name="nom" size="30"> <br><br>

                <label for="">Date de naissance :</label>
                <input type="date" name="dn"> <br><br>
                
                <label for="">E-Mail</label>
                <input type="text" name="em">
            </fieldset>

            <fieldset>
                <legend>Localisation professionnelle</legend>

                <input type="radio" name="prof" value="France">France<br>
                <input type="radio" name="prof" value="Italie">Italie<br>
                <input type="radio" name="prof" value="Allemagne">Allemagne<br>
                <input type="radio" name="prof" value="France">France<br>
            </fieldset>
            <input type="submit">
        </form>






        <h1>Les Formulaires en PHP</h1>

            <!-- 
                Ils sont utilisés pour gestion interaactive d'un site et sont à la base des pages web dynamiques.

                * Mise en oeuvre*
                    Un formulaire html est définie entre les balises <form> et </form>.

                    - method : mode de transmission vers le server des informations saisies dans le formulaire.
                    - action : qui contient le script qui va traîter le formulaire ou les données du formulaire.

                L'attribut method comprend deux types de valeurs : GET et POST.
                    - GET : se rapporte aux données du formulaire qui seront transmise par URL et utilise la variable superglobale $_GET.
                    - POST : se rapporte aux données du formulaire qui seront transmises dans le corps de la requête et utilise la variable superglobale $_POST.

                    SYNTAXE : 
                        $data = $_GET['dt']; // GET
                        $data = $_POST['dt']; // POST
            -->

            <form action="" method="post">
                NOM : <input type="text" name="nom">
                <br> <br>
                Prénom : <input type="text" name="prenom">
                <br> <br>
                <input type="submit">
            </form>

            <!-- 
                La méthode GET envoie les données sous forme d'une suite de couples nom/valeur ajoutés à l'URL de la page appelé. La partie d'une URL précédée par ? est appelée chaine de requête. Si la chaîne de requête contient plusieurs éléments, alors chaque élément/valeur doit être séparé par le caractère &amp;
                Par ailleurs, elle doit pas dépasser 255 caractères. Les données transmises au serveur par la méthode GET sont visibles par les utilisateurs directement dans la barre d'adresse du navigateur. 
            -->

            <p>Bonjour !</p>
            <p>Votre nom est <?php echo $_POST['nom'];?>, et votre prénom est <?php echo $_POST['prenom'];?></p>
            <p>Faites un autre essaie, <a href="#"> Cliquez ici </a></p>


            <!-- GET et POST : VARIABLES SUPERGLOBALES -->

            <!-- 
                Lorsque l'utilisateur valide le formulaire, l'attribut action appelle un programme PHP qui doit traiter les données. Les instructions qui permettent de récupérer les valeurs saisies dans le formulaire sont des variables superglobales, c'est à dire des variables qui seront disponible quel que soit le contexte du script. C'est la superglobale $_POST qui nous a permis de récupérer les données fournies par le formulaire via la méthod post.

                La liste suivante détaille toutes les variables superglobales :

                    - $_GLOBALS : c'est une association qui a pour but de référencer toutes les varaibles globales définies dans le contexte d'éxécution global du script. Les noms des variables globales sont des index du tableau.

                    - $_SERVER : il s'agit d'un tableau associatif contenant des informations comme les entêtes, les dossiers et les chemins du script. C'est le server qui crée les entrées du tableau. Par exemple l'expression $_SERVER['PHP_SELF'] renvoie le nom du fichier appelé avec le dossier à partir de la racine.

                    - $_GET : indique un tableau associatif contenant des valeurs passées au script courant via le protocole HTTP et la méthode GET.

                    - $_POST : c'est un tableau associatif qui contient les valeurs passées au script via le protocole HTTP et la méthode POST.

                    - $_COOKIE : renvoie un tableau associatif qui contient des informations concernant le cookie.

                    - $_SESSION : renvoie un tableau associatif qui contient des informations concernant la session en cours.

                    $_REQUEST : c'est un tableau associatif qui contient des variables d'environnement qui sont définies par le système.

            -->
            
            <?php echo $_SERVER['PHP_SELF'];?>


        <!-- Formulaires -->
            <h2>Renseignez les champs</h2>
                <div>
                    <form action="traitement.php" method="POST">
                        <label for="">Nom :</label>
                        <input type="text" name="nom" placeholder="Entrez votre nom ici" maxlength="30" autofocus="">
                        <br><br>
                        <label for="">Ville :</label>
                        <input type="text" name="ville" placeholder="Entrez votre ville ici" maxlength="30" autofocus="">
                        <br><br>
                        <label for="">Code Postal :</label>
                        <input type="text" name="cp" placeholder="Tapez 5 chiffres ici" maxlength="5" pattern="[0-9]{5}" required>
                        <br><br>
                        <input type="submit" value="Validation">
                    </form>
                </div> 
    </div>
</body>
</html>