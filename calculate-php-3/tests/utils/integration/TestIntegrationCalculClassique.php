<?php

namespace tests\utils\integration;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../../views/calculatriceClassique.php';
require_once __DIR__ . '/../../../src/utils/CalculsClassique.php';

use views\FormClassique;

class TestIntegrationCalculClassique extends TestCase
{
    private FormClassique $form;

    protected function setUp(): void
    {
        $this->form = new FormClassique(0, 0, '+');
    }

    public function testAdditionOperation()
    {
        // GIVEN
        $this->form = new FormClassique(6, 3, '+');

        // WHEN
        $this->form->operation();

        // THEN
        $this->assertEquals(9, $this->form->getResult());
    }

    public function testSoustractionCalcul()
    {
        // GIVEN
        $this->form = new FormClassique(6, 3, '-');

        // WHEN
        $this->form->operation();

        // THEN
        $this->assertEquals(3, $this->form->getResult());
    }

    public function testMultiplicationCalcul()
    {
        // GIVEN
        $this->form = new FormClassique(6, 3, '*');

        // WHEN
        $this->form->operation();

        // THEN
        $this->assertEquals(18, $this->form->getResult());
    }

    public function testDivisionCalcul()
    {
        // GIVEN
        $this->form = new FormClassique(6, 3, '/');

        // WHEN
        $this->form->operation();

        // THEN
        $this->assertEquals(2, $this->form->getResult());
    }
}
