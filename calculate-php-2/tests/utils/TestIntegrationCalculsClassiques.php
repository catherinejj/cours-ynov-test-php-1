<?php

use PHPUnit\Framework\TestCase;
use src\utils\CalculsComplexes;

class TestIntegrationCalculsClassiques extends TestCase
{
    private CalculsComplexes $calculsComplexes;

    public function setUp(): void
    {
        $this->calculsComplexes = new CalculsComplexes();
    }

    public function testCorrectlyUpdateResult(): void
    {
        //GIVEN
        $this->calculsComplexes->setResult(10.0);
        $newNumber = 5;
        $expectedResult = 15;

        //WHEN
        $actualResult = $this->calculsComplexes->add($newNumber);

        echo "\n--- Test: Addition de deux nombres positifs ---\n";
        echo "Résultat attendu : " . $expectedResult . "\n";
        echo "Résultat actuel: " . $actualResult . "\n";

        //THEN
        $this->assertEquals(
            $actualResult,
            $this->calculsComplexes->getCurrentResult(),
            "Le résultat n'est pas bon ".$this->calculsComplexes->getCurrentResult()."."
        );

        echo "Le test d'intégration a réussi. Résultat : " . $this->calculsComplexes->getCurrentResult() . PHP_EOL;
    }
}
