<?php

namespace src\utils;

class BinaryCalculate
{
    public function andBinaryCalcul(int $a, int $b): int
    {
        $result = $a & $b;
        //echo "Résultat AND binaire : " . $result . PHP_EOL;
        return $result;
    }

    public function xorBinaryCalcul(int $a, int $b): int
    {
        $result = $a ^ $b;
        return $result;
    }

    public function orBinaryCalcul(int $a, int $b): int
    {
        $result = $a | $b;
        return $result;
    }
}
