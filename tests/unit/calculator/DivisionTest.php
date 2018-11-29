<?php

class DivisionTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function dividesGivenOperands()
    {
        $division = new \App\Calculator\Division;
        $operands = [100, 2];
        $result = 50;
        $division->setOperands($operands);
        $this->assertEquals($result, $division->calculate());
    }

    /** @test */
    public function noOperandsGivenThrowExeptionWhenCalculating()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        $division = new \App\Calculator\Division;
        $division->calculate();
    }

     /** @test */
    public function ignoreDivisionByZero()
    {
        $division = new \App\Calculator\Division;
        $operands = [10, 0, 0, 5, 0];
        $result = 2;
        $division->setOperands($operands);
        $this->assertEquals($result, $division->calculate());
    }

}