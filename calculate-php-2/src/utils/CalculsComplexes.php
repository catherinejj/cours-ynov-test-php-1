<?php

namespace src\utils;

class CalculsComplexes
{
    private float $currentResult;
    private CalculsClassique $calculsClassique;

    public function __construct()
    {
        $this->currentResult = 0.0;
        $this->calculsClassique = new CalculsClassique();
    }

    public function add(float $number): float
    {
        $this->currentResult = $this->calculsClassique->additionCalcul($this->currentResult, $number);
        return $this->currentResult;
    }

    public function getCurrentResult(): float
    {
        return $this->currentResult;
    }

    public function setResult(float $newResult): void
    {
        $this->currentResult = $newResult;
    }


}
