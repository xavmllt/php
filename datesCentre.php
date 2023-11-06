<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <div class="content">
        <h1>Les dates</h1>
    <?php
        /*
            Pour manipuler les dates on utilise un groupe dtae/heure aussi appelé time-stamp qui est issue de la notation UNIX.
            PHP utliise le fuseau horaire qui défini par défault dans la rubrique [Date] du fichier php.ini. Ce fichier regroupe tous les paramètres de base. On peut ouvrir ce fichier avec n'importe quel éditeur.
            [Date]
            ;date.timezone = "Eurpoe/eBerlin"

            Vous pouvez récupérer le nom du fuseau horaire en cour par le code ci-dessous.
        */

        // Je récupère le fuseau horaire local
        $fuseau = date_default_timezone_get(); // affiche UTC
        echo $fuseau;

        /* Le programme renvoie uct qui signifie 
        */

        echo date("j m y")."<br />"; // affiche la date au format 17 10 23
        echo date("j m Y")."<br />"; // affiche la date complète à la francaise
        echo date("j M Y")."<br />"; // affiche le 17 oct 2023
        // setlocale(LC_TIME, "fr_FR"); 
        echo strftime("%A")."<br />";
        echo date("D F Y")."<br />";
        echo date("D d M Y")."<br />";

        /*
            differents paramètres de la fonction Date
            a : am ou pm
            A : AM ou PM
            d : Le jour du mois sur 2 chiffres
            D : Le jour de la semaine en anglais sur 3 lettres
            F : Le nom du mois en anglais
            j : Le jour sur un chiffre
            m : Le numéro du mois sur deux chiffre
            M : Le numéro du mois en anglais sur 3 lettres
            n : Le numéro du mois sur un chiffre
            y : L'année sur 2 chiffres
            Y : Le numéro du jour de la semaine (0 à 6 en commençant par le dimanche)

            Il est à noté que pour afficher les dates dans un format local, par exemple en français il faut utiliser l'instruction "strftime avec les paramètres.
        */

        echo strftime("%A")."<br />";
        setlocale(LC_TIME, "french"); // on définit le français comme format de date
        echo strftime("%A")."<br />";
        echo strftime("%a")."<br />"; // affiche tue
        echo strftime("%A %d %B %Y")."<br />";
        echo strftime("%d/%m/%Y")."<br />"; // en format 17/10/2023
        echo strftime("%d-%m-%Y")."<br />"; // en format 17-10-2023

        /* comparaison de deux dates */
        $date1 = "15-09-2023";
        $date2 = "02-10-2023";

        // je les transforment en timestamp
        $t1 = strtotime($date1);
        echo "le 04/09/2023 est égal à : " .$t1. " secondes<br />";

        $t2 = strtotime($date2);
        echo "le 18/10/2023 est égal à : " .$t2. " secondes <br />";

        if($t1 < $t2){
            echo "La premiere date est bien avant la 2ème date <br />";
        }else{
            "La deuxième date est bien avant la 1ère <br />";
        };

        /*
            TESTER LA VALIDITE D'UNE DATE
            
            D'une manière générale PHP est employé pour répondre à une interaction d'un client qui envoie ses informations vers un server par l'intermédiaire d'un formulaire. Si la personne transfère des dates, le programme PHP devra valider avant de les utliliser. PHP possède pour ce faire, une fonction qui peut aider à tester les dates à traiter : checkdate().
            Cette fonction est un booléen qui renvoie true or false. Les paramètres en entrées sont le mois de la date à tester, le jour et l'année. Bien évidemment le mois doit être compris entre le 1 et 12, le jour doit être compris entre 1 et 31 et les années entre 1 et 32767.
            Les années bissextiles sont prises en comptes.
        */
        echo checkdate(12, 25, 2022);
        echo "<br />";
        if(checkdate(05, 25, 2021) == false){
            echo "mauvaise date";
        }else{
            echo "bonne date";
        };

        // Date et heures
        $dateTemps = date("Y-m-d H:i:s");
        echo "<br />Date actuelle: $dateTemps"
    ?>
    </div>
</body>
</html>