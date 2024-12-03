<?php

namespace Emeri\TpPhpPoo;


// Class ListCards
// Gère une liste de cartes
 
class ListCards
{
    
    private $listCards = [];

    // Ajoute une carte à la liste 
    public function addCard(Card $card): void
    {
        $this->listCards[] = $card;
    }

   
    // Affiche les informations de toutes les cartes
    public function printCardsInfo(): void
    {
        foreach ($this->listCards as $index => $card) {
            echo "Infos sur la carte " . ($index + 1) . ":\n";
            echo "Question: " . $card->getQuestion() . "\n";
            echo "Answer: " . $card->getAnswer() . "\n\n";
        }
    }
}