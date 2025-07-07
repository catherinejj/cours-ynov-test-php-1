<?php

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\BrowserKit\HttpBrowser;
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
    private HttpBrowser $client;
    private array $formData = []; 
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
         $this->client = new HttpBrowser(HttpClient::create());
    }
    // --- FeatureContext has missing steps. Define them with these snippets:
    #[Given('je suis sur :arg1')]
    public function jeSuisSur($arg1): void
    {
        $this->client->request('GET', 'http://localhost:8080' . $arg1);
    }

    #[When('je clique sur le lien :arg1')]
    public function jeCliqueSurLeLien($arg1): void
    {
        $crawler = $this->client->getCrawler();

        $link = $crawler->selectLink($arg1);
        if ($link->count() === 0) {
            throw new \Exception("il ne trouve pas '$arg1'");
        }

        $this->client->click($link->link());
    }

    #[When('je remplis :arg1 avec :arg2')]
    public function jeRemplisAvec($champ, $valeur): void
    {
        $this->formData[$champ] = $valeur;
    }

    #[When('je choisis :arg1 dans :arg2')]
    public function jeChoisisDans($valeur, $champ): void
    {
        $this->formData[$champ] = $valeur;
    }

    #[When('je clique sur :arg1')]
    public function jeCliqueSur($arg1): void
    {
        $crawler = $this->client->getCrawler();
        $button = $crawler->selectButton($arg1);

        if ($button->count() === 0) {
            throw new \Exception("Le bouton '$arg1' n'existe pas...");
        }

        $form = $button->form($this->formData);
        $this->client->submit($form);
    }

    #[Then('je devrais voir :arg1')]
    public function jeDevraisVoir($arg1): void
    {
        $html = $this->client->getResponse()->getContent();

        if (strpos($html, $arg1) === false) {
            throw new \Exception("Le texte '$arg1' n'existe pas ...");
        }
    }
}