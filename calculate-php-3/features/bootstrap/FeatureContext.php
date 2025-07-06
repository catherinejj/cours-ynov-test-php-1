<?php

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Step\Given;
use Behat\Step\When;
use Behat\Step\Then;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    
    private Crawler $crawler;
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
    //--- FeatureContext has missing steps. Define them with these snippets:

    #[Given('je suis sur :arg1')]
    public function jeSuisSur($arg1): void
    {
        throw new PendingException();
    }

    #[Given('je remplis :arg1 avec :arg2')]
    public function jeRemplisAvec($arg1, $arg2): void
    {
        throw new PendingException();
    }

    #[Given('je sélectionne :arg1 dans :arg2')]
    public function jeSélectionneDans($arg1, $arg2): void
    {
        throw new PendingException();
    }

    #[When('je clique sur :arg1')]
    public function jeCliqueSur($arg1): void
    {
        throw new PendingException();
    }

    #[Then('je devrais voir :arg1')]
    public function jeDevraisVoir($arg1): void
    {
        throw new PendingException();
    }
}
