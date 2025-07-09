<?php

namespace features\bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Step\Given;
use Behat\Step\When;
use Behat\Step\Then;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }
    // --- features\bootstrap\FeatureContext has missing steps. Define them with these snippets:

    #[Given('I have an instance of BinaryCalculate')]
    public function iHaveAnInstanceOfBinarycalculate(): void
    {
        throw new PendingException();
    }

    #[When('I perform binary AND between :arg1 and :arg2')]
    public function iPerformBinaryAndBetweenAnd($arg1, $arg2): void
    {
        throw new PendingException();
    }

    #[Then('the result should be :arg1')]
    public function theResultShouldBe($arg1): void
    {
        throw new PendingException();
    }

    #[When('I perform binary OR between :arg1 and :arg2')]
    public function iPerformBinaryOrBetweenAnd($arg1, $arg2): void
    {
        throw new PendingException();
    }

    #[When('I perform binary XOR between :arg1 and :arg2')]
    public function iPerformBinaryXorBetweenAnd($arg1, $arg2): void
    {
        throw new PendingException();
    }
}
