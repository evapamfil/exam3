<?php

class AdditionTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function addsUpGivenOperands()
    {
        $addition = new \App\Calculator\Addition;
        $operands = [5, 10];
        $result = 15;
        $addition->setOperands($operands);
        $this->assertEquals($result, $addition->calculate());
    }

    /** @test */
    public function noOperandsGivenThrowExeptionWhenCalculating()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        $addition = new \App\Calculator\Addition;
        $addition->calculate();
    }

}