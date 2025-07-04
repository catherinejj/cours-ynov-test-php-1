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

    }

    public function divisionCalcul(int $a, int $b)
    {
        if ($b === 0) {
            $error = "impossible de diviser par zéro";
            return $error;
        }
        $result = $a / $b;
        return $result;
    }


}
