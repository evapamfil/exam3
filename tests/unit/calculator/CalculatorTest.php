<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function canSetSingleOperation()
    {
        $addition = new App\Calculator\Addition;
        $operands = [5, 10];
        $addition->setOperands($operands);
        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);
        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function canSetMultipleOperations()
    {
        $addition1 = new App\Calculator\Addition;
        $operands1 = [5, 10];
        $addition1->setOperands($operands1);
        $addition2 = new App\Calculator\Addition;
        $operands2 = [2, 2];
        $addition2->setOperands($operands2);
        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition1, $addition2]);
        $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function operationsAreIgnoredIfNotInstanceOfOperationInterface()
    {
        $addition = new App\Calculator\Addition;
        $operands = [5, 10];
        $addition->setOperands($operands);
        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition, 'clement', 'test']);
        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function canCalculateResult()
    {
        $addition = new App\Calculator\Addition;
        $operands = [5, 10];
        $result = 15;
        $addition->setOperands($operands);
        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);
        $this->assertEquals($result, $calculator->calculate());
    }

    /** @test */
    public function calculateMethodReturnsMultipleResults()
    {
        $addition = new App\Calculator\Addition;
        $operands = [5, 10];
        $addition->setOperands($operands); // 15
        $division = new App\Calculator\Division;
        $operands = [50, 2];
        $division->setOperands($operands); // 25
        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition, $division]);
        $this->assertInternalType('array', $calculator->calculate());
        $this->assertEquals(15, $calculator->calculate()[0]);
        $this->assertEquals(25, $calculator->calculate()[1]);
    }
}