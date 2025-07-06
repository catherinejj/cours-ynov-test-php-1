<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../views/calculatriceBinaire.php';
require_once __DIR__ . '/../src/utils/BinaryCalculate.php';

class TestIntegrationFormBinaire extends TestCase
{
    public function testAndOperation()
    {
        // GIVEN
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => 'and'
        ];
        $form = new \FormBinaire($post);

        // WHEN
        $form->operateur();

        // THEN
        $this->assertEquals(2, $form->getResult());
    }

    public function testOrOperation()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => 'or'
        ];
        $form = new \FormBinaire($post);
        $form->operateur();

        $this->assertEquals(7, $form->getResult());
    }

    public function testXorOperation()
    {
        $post = [
            'a' => 6,
            'b' => 3,
            'op' => 'xor'
        ];
        $form = new \FormBinaire($post);
        $form->operateur();

        $this->assertEquals(5, $form->getResult());
    }
}