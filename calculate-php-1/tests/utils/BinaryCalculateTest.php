<?php

use PHPUnit\Framework\TestCase;
use src\utils\BinaryCalculate;

class BinaryCalculateTest extends TestCase
{
    private $binaryCalculate;

    protected function setUp(): void
    {
        parent::setUp();
        $this->binaryCalculate = new BinaryCalculate();
    }

    public function testAndBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expected = 0; // 100 & 001 = 000

        // WHEN
        $result = $this->binaryCalculate->andBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expected, $result);
    }
        public function testOrBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expected = 5; // 100 | 001 = 101

        // WHEN
        $result = $this->binaryCalculate->orBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expected, $result);
    }

    public function testXorBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expected = 5; // 100 ^ 001 = 101

        // WHEN
        $result = $this->binaryCalculate->xorBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expected, $result);
    }
}