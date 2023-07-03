# La Méthode Besson

Sélection: La Passerelle
Étiquettes: Algortihmique, PHP, Terminal

# La Méthode Besson

Ce projet consiste en la création d'un générateur de scénario pour Mr Besson. Un scénario se compose toujours des quatre éléments suivants: 'qui', 'quoi', 'aqui' et 'ou'. Le but de cet exercice est d'écrire un programme qui crée 4 tableaux 'qui', 'quoi', 'aqui' et 'ou' qui contiennent chacun les listes de tous les mots disponibles pour générer un scénario.

## Avant propos

Pour comprendre le but de cet exercice, voir cette vidéo de Mozinor : [https://youtu.be/GJ1ySirkOAE](https://youtu.be/GJ1ySirkOAE)

## La méthode Besson

Le but est de créer un générateur de scénario pour Luc Besson. 

Un scénario se compose toujours des quatre éléments suivants: 'qui', 'quoi', ' à qui' et 'où'. Les listes de ces éléments sont:

### qui

```
$who = [
    'Bruce Willis',
    'Liam Neeson',
    'Un honnête japonais tatoué',
    'Un Yamakasi',
    'Un ninja',
    'Un chauffeur de taxi',
    'Un transporteur',
    'Léon',
    'Un flic',
    'Un développeur crée une IA qui ',
    'Une travailleuse du sexe'
];

```

### quoi

```
$what = [
    'sauve',
    'poursuit',
    'aide',
    'harcèle',
    'séquestre'
];

```

### à qui

```
$whom = [
    'des Yamakasi',
    'un homme Noir',
    'un Yakusa',
    'une alien rousse',
    'un flic'
];

```

### où

```
$where = [
    'à Paris',
    'à Marseille',
    'à New-york',
    'à Tokyo',
    'à Roubaix',
    'dans le Métaverse'
];

```

## Exercice

1. Créer un programme qui choisi au hasard un 'qui', un 'quoi', un 'aqui' et un 'ou' et crée la phrase finale résumant le scénario. 
2. Ce programme doit proposer à l'utilisateur de générer un nouveau scénario s'il le souhaite, et continuer tant que l'utilisateur n'a pas choisi d'arrêter.

Voici le code PHP pour réaliser cet exercice:

```
<?php
const EOL = "\\n\\r";

// qui
$who = [
    'Bruce Willis',
    'Liam Neeson',
    'Un honnête japonais tatoué',
    'Un Yamakasi',
    'Un ninja',
    'Un chauffeur de taxi',
    'Un transporteur',
    'Léon',
    'Un flic',
    'Un développeur crée une IA qui ',
    'Une travailleuse du sexe'
];

// quoi
$what = [
    'sauve',
    'poursuit',
    'aide',
    'harcèle',
    'séquestre'
];

// à qui
$whom = [
    'des Yamakasi',
    'un homme Noir',
    'un Yakusa',
    'une alien rousse',
    'un flic'
];

// où
$where = [
    'à Paris',
    'à Marseille',
    'à New-york',
    'à Tokyo',
    'à Roubaix',
    'dans le Métaverse'
];

do {
    // aléatoire
    $randWho = rand(0, count($who)-1);
    $randWhat = rand(0, count($what)-1);
    $randWhom = rand(0, count($whom)-1);
    $randWhere = rand(0, count($where)-1);

    //la phrase appelée dans le scénario
    $scenario = $who[$randWho] . ' ' . $what[$randWhat] . ' ' . $whom[$randWhom] . ' ' . $where[$randWhere] . EOL;

    echo EOL;
    // j'appelle le scénario
    echo $scenario;

    echo EOL;
    //je propose d'en générer un autre
    $continue = readline('T\'en veux un autre, Luc (o/n)? ');
} while ($continue == 'o');
?>

```

La boucle do-while permet de générer un scénario aléatoire et de le proposer à l'utilisateur. 

Si l'utilisateur souhaite générer un nouveau scénario, le programme recommence la boucle.