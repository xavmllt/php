<?php
/*
    CODER EN ORIENTEE OBJET 

    La programmation orienté objet est beaucoup moins linéaire par rapport à la programmation procédurale. Son principale avantage est d'être mieux organisé permettant ainsi de facilité la lisibilité du code et sa maintenance.
    Son concept est un peu plus difficile à maitriser que pour celui du language procédurale qui nous est plus familier dans sa manière de s'éxècuter.
    Son principe est de faire en sorte que tout nous allons coder devienne un objet:

    Qu'est qu'un objet ?
    Un objet est tout ce que vous avez l'habitude de manipuler au quotidient par exemple un livre, un fauteuil.

    Diiférence entre procédurale et POO
    Ce sont deux manières de programmer. Sur le fond, utilise le même language c'est à dire tout ce que nous avons appris jusqu'ici, elle se différencie sur l'approche de la conception du programme lui-même.
    Comme nous l'avons compris, la POO a l'avantage d'avoir un code plus clair que celui du procédurale et donc plus facile à mettre à jour. Il sera également beaucoup plus facile de le réutiliser dans d'autres portions de code de notre application ou site internet ce qui est loin d'être négligeable.

    En résumé, on peut retenir qu'il existe deux façons de programmer en PHP : POO ou procédurale.
    Il n'y a donc pas de bonne ou mauvaise manière de coder. Nous disons simplement que plus votre site ou application grossira, plus vous aurez interêt à utliser la POO.

    *** Les fondamentaux de la POO ***
    
    Principe de POO

    La POO se base sur le principe que tout élément inscrit est un objet. Le principe sera de créer des objets, pour cela nous utilisons des classes.
    Une classe est donc un bloc de code culturel qui servira de moules pour la création d'un ou des objets.

    -- La classe --
    Nous venons de voir que le principe d'une classe est de créer un objet. La classe utilise le mot-clé class et contient un ensemble de fonctions qui servira de modèle à la création d'un objet.
    Ses fonctions porteront le nom de "méthodes". Lorsqu'on crée une fonctioon à l'intérieur d'une classe, on l'appelle "méthod". En revanche le principe de fonctionnement est totalement identique.

    -- les objets --
    Maintenant que nous avons défini une classe, nous pouvons alors créer un objet issu de cette classe. On dit alors qu'on instancie la classe ou que l'objet est une instance de la classe.
    Ces objets seront donc construits à partir des méthodes (fonctions) et les propriétés ou attribut (variables) de la classe. 

    On peut retenir que la POO est basée sur les objets et les classes. On crée des objets à partir d'une classe. Chaque objet a accès aux méthodes et aux propriétés de la classe qui les a crées.

    -- Création d'une classe --
    Par convention, le nom de la classe commence par une lettre majuscule et chaque classe sera crée dans un fichier unique.
    Le fichier PHP contiendra donc uniquement la classe ainsi que ses attributs et ses méthodes. Ce fichier pourra alors être appelé partout dans notre site ou application grâce notemment aux inclusion de fichiers que nous avons apprise jusqu'ici.
    Synthaxe:

    class MaClass{

    }


    Les différentes visibilitées d'une propriété

    ** La visibilité publique **
    Une propriété de visibilité publique peut etre appelée de n'importe quel endroit du site. Cela signifie également sa syntaxe: public $_propriete;

    ** La propriété de visibilité privée
    Une propriété de visibilité privée ne peut être appelé que depuis la classe. Cela signifie égalemment qu'elle pourrra être modifié uniquement à partir de la classe.

    Sa syntaxe : private $_propriete;

    ** Ma propriété de visibilité protégée
    Une propriété de visibilité protégé ne peut être appelée que depuis la classe parent mais aussi depuis une ou des classes enfants. Cela signifie qu'elle ne pourra être modifié qu'à partir de la classe parent ou des classes enfants.
    Sa syntaxe : protected $_propriete;

    ** LES ASSESSEURS ET LES MUTATEURS

    -- Les mutateurs
    Un mutateur (ou un setter) permet d'affecter une valeur à une propriété d'un objet. Grâce aux mutateurs nous allons pouvoir affecter n'importe quel valeur a notre propriété lors et ou après la création d'un nouvel objet.

        -- Créer un mutateur
        La création d'un mutateur se fera donc au travers d'une méthode. Le mutateur portera la mention set, comme setter.
        Puis nous lui donnerons le nom de la propriété qu'il devra affecter d'une nouvelle valeur.
        Syntaxe:

        public function setPrenom($prenom){
            $this->prenom=$prenom;
        }
        setPrenom() est une méthode de type mutateur et de visibilité publique. Elle possède un paramètre $prenom. Ce paramètre est directement affecté à l'attribut $prenom grâce aux commandes $this->prenom;
        Grâce à cette méthode à qui nous passons la varaible $prenom, nous pouvons affecter un prenom à chaque personne que nous crééront avec la table Pers (ou Personne).

        --- Accéder à un muatateur
        L'accès à un mutateur se fait comme nous l'avons vu dans l'exemple de la Pers c'est à dire avec l'aide du caractère ->;
        $Emi = new Pers();
        $Emi->setPrenom('Pierre'); nous accèdons à la méthode setPrenom en lui affectant l'argument Pierre.

        En résumé : grâce au mutateur, nous avons pu modifier la valeur de la propriété privée (private), en lui affectant une valeur de notre choix.

    
    -- Les assesseurs
    Un assesseurs (ou getter) permet d'afficher le contenu d'une propriété. Il s'agit d'une méthode, au même titre que le setter.

        -- Créer un assesseur
        La création d'un assesseur se fera donc au travers d'une méthode. L'assesseur portera la mension get, comme getter. Puis nous lui donnerons le nom de la propriété dont il affichera la valeur.
        Syntaxe:

        public function getPrenom(){
            return $this->prenom=$prenom;
        }
        nb: getPrenom() est une méthode de type assesseur et de visibilité publique. Elle est relativement simple puisqu'elle se contente de retourner la valeur du paramètre $prenom.
        Grâce à la méthode getPrenom(), nous récupérons le contenu de la propriété $prenom.

        -- Accéder à un assesseur
        L'accès à un assesseur se fait avec l'aide du caractère ->;
        $Emi = new Pers;
        $Emi -> setPrenom('Pierre');
        echo $Emi->getPrenom();
        Sur la dernière ligne, nous accédons à la méthode getPrenom afin de récupérer la valeur de la propriété $prenom.
        
        En résumé, grâce à l'assesseur, nous avons pu accéder à la valeur de l'attribut privée $prenom;

        CONCLUSION
        Un mutateur permet de modifier la valeur d'une propriété. Alors qu'un assesseur permet d'en récupérer son contenu







*/
?>