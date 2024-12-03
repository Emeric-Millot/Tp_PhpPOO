<?php

require 'vendor/autoload.php';

use Emeri\TpPhpPoo\Card;
use Emeri\TpPhpPoo\ListCards;

// Création d'une nouvelle liste de cartes
$listCards = new ListCards();

// Demande à l'utilisateur combien de cartes il veut ajouter
$nbCards = readline("Combien de cartes voulez-vous ajouter ? ");

// Vérification que l'entrée est un entier positif
/**
     * Tant que l'entrée n'est pas composée uniquement de chiffres 
     * OU que le nombre est inférieur ou égal à zéro, 
     * continuer la boucle.
     * while (!ctype_digit($nbCards) || intval($nbCards) <= 0)
     * 
     * ctype_digit()
     * Elle prend une chaîne de caractères en entrée.
     * Elle vérifie chaque caractère de cette chaîne.
     * Elle retourne `true` si tous les caractères sont des chiffres (0-9).
     * Elle retourne `false` si au moins un caractère n'est pas un chiffre. 
     * 
 */
while (!ctype_digit($nbCards) || intval($nbCards) <= 0) {
    echo "Veuillez entrer un nombre entier positif.\n";
    $nbCards = readline("Combien de cartes voulez-vous ajouter ? ");
}

$nbCards = intval($nbCards);

// Création des cartes
for ($i = 1; $i <= $nbCards; $i++) {
    $question = readline("Entrez une question pour la carte $i: ");
    $answer = readline("Entrez une réponse à la question : ");
    
    $card = new Card($question, $answer);
    $listCards->addCard($card);
}

// Affichage des cartes
echo "\nListing des cartes contenues dans la liste :\n";
$listCards->printCardsInfo();