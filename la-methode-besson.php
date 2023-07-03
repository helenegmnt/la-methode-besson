<?php
const EOL = "\n\r";
//********************************
// La méthode Besson
//********************************

// I/ Avant propos
// ***************

// Pour comprendre le but de cet exercice, voir cette vidéo de Mozinor : https://youtu.be/GJ1ySirkOAE

// II/ La méthode Besson
// *********************

// Vous allez donc créer un générateur de scénario pour Mr Besson.

// Un scénario se compose toujours des quatre éléments suivants : 
// ...
// Bien entendu, vous pouvez changer ces listes selon votre bon plaisir

// III/ Exercice

// Créez un programme qui crée 4 tableaux 'qui', 'quoi', 'aqui' et 'ou' qui contiennent chacun les listes de tous mots disponibles pour générer un scénario.

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
// - quoi
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
// - où
$where = [
	'à Paris',
	'à Marseille',
	'à New-york',
	'à Tokyo',
    'à Roubaix',
    'dans le Métaverse'
];
// Créer l'algorithme qui choisi au hasard un qui', un 'quoi', un 'aqui' et un 'ou' et crée la phrase finale résumant le scénario.

/*

// D'abord je liste les random

$randWho = rand(0, count($who)-1);
$randWhat = rand(0, count($what)-1);
$randWhom = rand(0, count($whom)-1);
$randWhere = rand(0, count($where)-1);

// je liste pour la création de la phrase 

$randWho = $who[$randWho];
$randWhat = $what[$randWhat];
$randWhom = $whom[$randWhom];
$randWhere = $where[$randWhere];

*/

// Votre programme doit proposer à l'utilisateur de générer un nouveau scénario si il le souhaite, et continuer tant que l'utilisateur n'a pas choisi d'arrêter.

do {
    // les rand
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