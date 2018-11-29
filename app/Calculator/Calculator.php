<?php
/**
 * Created by PhpStorm.
 * User: evapamfil
 * Date: 29/11/2018
 * Time: 15:02
 */

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Calculator

{
    protected $operations;

    /**
     * @return mixed
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param mixed $operation
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;

    }


    /**
     * @param mixed $operation
     */
    public function setOperation($operation)
    {
        array_push ($this->operations, $operation);
    }

    public function calculate()
    {
        $this->operations[0]->calculate();
    }


}