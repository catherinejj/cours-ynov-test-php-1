<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../views/calculatriceBinaire.php';
require_once __DIR__ . '/../../src/utils/BinaryCalculate.php';

class TestIntegrationFormBinaire extends TestCase
{
    private \FormBinaire $form;

    protected function setUp(): void
    {
        $this->form = new \FormBinaire(0, 0, 'and');
    }

    public function testAndOperation()
    {
        // GIVEN
        $this->form = new \FormBinaire(6, 3, 'and');

        // WHEN
        $this->form->operateur();

        // THEN
        $this->assertEquals(2, $this->form->getResult());
    }

    public function testOrOperation()
    {
        // GIVEN
        $this->form = new \FormBinaire(6, 3, 'or');

        // WHEN
        $this->form->operateur();

        // THEN
        $this->assertEquals(7, $this->form->getResult());
    }

    public function testXorOperation()
    {
        // GIVEN
        $this->form = new \FormBinaire(6, 3, 'xor');

        // WHEN
        $this->form->operateur();

        // THEN
        $this->assertEquals(5, $this->form->getResult());
    }
}