<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../views/calculatriceClassique.php';
require_once __DIR__ . '/../src/utils/CalculsClassique.php';

class TestIntegrationCalculClassique extends TestCase
{
    public function testAdditionOperation()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => '+'
        ];
        $form = new \FormClassique($post);
        $form->operation();

        $this->assertEquals(9, $form->getResult());
    }

    public function testSoustractionCalcul()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => '-'
        ];
        $form = new \FormClassique($post);
        $form->operation();

        $this->assertEquals(3, $form->getResult());
    }

    public function testMultiplicationCalcul()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => '*'
        ];
        $form = new \FormClassique($post);
        $form->operation();

        $this->assertEquals(18, $form->getResult());
    }

    public function testDivisionCalcul()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => '/'
        ];
        $form = new \FormClassique($post);
        $form->operation();

        $this->assertEquals(2, $form->getResult());
    }
}