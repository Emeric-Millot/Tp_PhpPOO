<?php

namespace Emeri\TpPhpPoo;


// Class Card
// Représente une carte avec une question et une réponse

class Card
{
    
    // La question de la carte
    private $question;

    
    // La réponse à la question
    private $answer;


    // Constructeur de la classe Card
    // $question La question de la carte
    // $answer La réponse à la question
    
    public function __construct(string $question, string $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    // Récupère la question de la carte
    public function getQuestion(): string
    {
        return $this->question;
    }

    // Récupère la réponse de la carte
    public function getAnswer(): string
    {
        return $this->answer;
    }
}