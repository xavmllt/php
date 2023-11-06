<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les expressions régulières</title>
</head>
<body>
    <?php
        /*
            Elles permettent de contrôler la bonne saisie dans un formulaire d'une page web. Par exemple, un code postal ne contient que des chiffres, un nom propre ne peut pas contenir des caractères inhabituel, une adresse email doit obligatoirement posséder le signe @, une zone doit obligatoirement être en majuscule, etc..
            À partir de HTML 5, la balise input propose des contrôles intégrés qui surveillent les caractères, mais vous pouvez aussi tester les données dans un script PHP.
            Ces expressions sont appelées rationnelles ou régulière (régular en anglais).

            Le principe est de définir un modèle de saisies dans une chaîne qui va servir à tester une autre chaîne de caractère par rapport à ce modèle. Si il n'y a pas de correspondance, on peut renvoyer un message à l'utilisateur en indiquant qu'il y a une erreur.
        */

        $modele = "/[A-Z]/";
        if(preg_match($modele.$_POST['nom']) == false){
            // J'appelle la fonction et je passe le message à afficher
            echo 'Le nom doit comporter des majuscules';
        };

        // Le tableau ci-dessous montre quelques modèles employés dans le code PHP

        /*
            Modèle                              ||  Description
            "/[a-z]/"                               AU moins un caractère contenant n'importe quelle lettre en minuscule
            "/[A-Z]/"                               AU moins un caractère contenant n'importe quelle lettre en majuscule
            "/[0-9]/"                               Au moins un chiffre entre 0 et 9
            "/[[:alpha:]]/"                         N'importe quel caractère minuscule ou majuscule
            "/[[:alnum:]]/"                         Tout les caractères alphanumériques
            "/[[:blank:]]/"                         Les espaces, les tabulations
            "/[[:ctrl:]]/"                          Les caractères de contôle
            "/[[:digit:]]/"                         Tous les chiffres
            "/Lyon/"                                Test si Lyon est présent
            "/\.com|\.fr/"                          Teste si l'une des chaînes .com ou .fr existe. Le "ou" est indiqué par le caractère
            "/[^rtg]/"                              Le caractère ^ exclut les lettres r, t et g
        */

    ?>

    <form action="traitement3.php" method="post">
        <fieldset>
            <legend><b>Vos coordonnées</legend>

            <label for="">Nom :</label>
            <input type="text" name="nom" size="40">

            <label for="">Email</label>
            <input type="mail" name="email" pattern="(^[a-z0-9]+) @([a-z0-9])+(\.)([a-z]{2,4})">

            <label for="">Téléphone :</label>
            <input type="tel" name="tel" pattern="^0[0-9]{9}">

            <label for="">Code :</label>
            <input type="password" name="code" size="40" maxlength="6">

            <label for="">Département :</label>
            <input type="number" name="num" min="1" max="101">

            <label for="">Né(e) le :</label>
            <input type="date" name="date" min="1960_01_01">

            <input type="radio" name="sexe" value="Femme">Femme <br>
            <input type="radio" name="sexe" value="Homme">Homme <br>

            <select name="pays" size="1">
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
                <option value="Suisse">Suisse</option>
                <option value="Canada">Canada</option>
            </select>            
        </fieldset>
        <input type="submmit" value="envoyer">
    </form>
</body>
</html>