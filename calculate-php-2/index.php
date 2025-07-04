<?php
include '.src/utils/BinaryCalculate.php';

$chiffreA = readline("Quel est votre premier chiffre : ");
echo "Voici votre chiffre a : " . $chiffreA . PHP_EOL;

$chiffreB = readline("Quel est votre second chiffre : ");
echo "Voici votre chiffre b : " . $chiffreB . PHP_EOL;

$operation = readline("Quelle opération voulez-vous effectuer ? (and, or, xor) : ");
echo "Opération choisie : " . $operation . PHP_EOL;

$calcul = new BinaryCalculate();

switch (strtolower($operation)) {
    case 'and':
        $calcul->andBinaryCalcul((int)$chiffreA, (int)$chiffreB);
        break;
    case 'or':
        $calcul->orBinaryCalcul((int)$chiffreA, (int)$chiffreB);
        break;
    case 'xor':
        $calcul->xorBinaryCalcul((int)$chiffreA, (int)$chiffreB);
        break;
    default:
        echo "Opération non reconnue. Veuillez choisir 'and', 'or' ou 'xor'." . PHP_EOL;
        break;
}