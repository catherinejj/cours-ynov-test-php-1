<?php

use PHPUnit\Framework\TestCase;
use src\utils\CalculsClassique;

class TestCalculsClassique extends TestCase
{
    private CalculsClassique $calculsClassique;
    protected function setUp(): void
    {
        $this->calculsClassique = new CalculsClassique();
    }

    //ADDITION
    public function testAdditionCalculIsValid()
    {
        //GIVEN
        $chiffre1 = 2;
        $chiffre2 = 4;
        $expectedResult = 6;

        //WHEN
        $actualResult = $this->calculsClassique->additionCalcul($chiffre1, $chiffre2);

        //THEN
        $this->assertEquals($expectedResult, $actualResult);
    }


    //DIVISION
    public function testDivisionCalculIsValid()
    {
        //GIVEN
        $chiffre1 = 9;
        $chiffre2 = 3;
        $expectedResult = 3;

        //WHEN
        $actualResult = $this->calculsClassique->divisionCalcul($chiffre1, $chiffre2);

        //THEN
        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testDivisionCalculIsInvalid()
    {
        //GIVEN
        $chiffre1 = 9;
        $chiffre2 = 0;
        $expectedResult = "impossibledediviserparzéro";

        //WHEN
        $actualResult = $this->calculsClassique->divisionCalcul($chiffre1, $chiffre2);

        //THEN
        $this->assertEquals($expectedResult, $actualResult);
    }
}
