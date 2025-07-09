<?php

namespace features\bootstrap;

use src\utils\BinaryCalculate;
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Step\Given;
use Behat\Step\When;
use Behat\Step\Then;

/**
 * Defines application features from the specific context.
 */
class UnitaireContext implements Context
{
    
    private BinaryCalculate $calculator;
    private int $result;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        //$this->calculator = new BinaryCalculate();
    }
    //features\bootstrap\FeatureContext a des étapes manquantes. Définissez-les avec les modèles suivants :

    #[Given('I have an instance of BinaryCalculate')]
    public function iHaveAnInstanceOfBinarycalculate(): void
    {
        $this->calculator = new BinaryCalculate();
    }

    #[When('I perform binary AND between :arg1 and :arg2')]
    public function iPerformBinaryAndBetweenAnd($arg1, $arg2): void
    {
        $this->result = $this->calculator->andBinaryCalcul((int)$arg1, (int)$arg2);
    }

    #[Then('the result should be :arg1')]
    public function theResultShouldBe($arg1): void
    {
        if ($this->result !== (int)$arg1) {
            throw new \Exception("Expected result to be $arg1 but got $this->result");
        }
    }}
