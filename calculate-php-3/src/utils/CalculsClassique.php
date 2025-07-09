<?php

namespace src\utils;

// Classe pour créer les calculs standards

class CalculsClassique
{
    public function additionCalcul(int $a, int $b)
    {
        $result = $a + $b;
        return $result;
    }

    public function soustractionCalcul(int $a, int $b)
    {
        $result = $a - $b;
        return $result;
    }

    public function multiplicationCalcul(int $a, int $b)
    {
        $result = $a * $b;
        return $result;
    }

    public function divisionCalcul(int $a, int $b)
    {
        if ($b === 0) {
            //Note pour le professeur : J'ai fait le TDD avec Angie et Julien donc on a créé l'erreur ici :
            $error = "impossible de diviser par zéro";
            return $error;
        }
        $result = $a / $b;
        return $result;
    }

}
