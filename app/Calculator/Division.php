<?php
/**
 * Created by PhpStorm.
 * User: evapamfil
 * Date: 29/11/2018
 * Time: 14:38
 */

namespace App\Calculator;

use App\Calculator\Contracts\CalculateInterface;
use App\Calculator\Exceptions\NoOperandsException;

class Division extends NoOperandsException implements CalculateInterface
{
    protected $operands;

    /**
     * @param mixed $operands
     */
    public function setOperands($operands)
    {
        $this->operands = $operands;

    }


    public function calculate()
    {
        if(empty($this->operands)){

            throw new NoOperandsException();
        }

        $result = 0;

        foreach($this->operands as $operand){
            if ($operand === 0) {

                    continue;
            }

            if ($result != 0){
                $operand = $result / $operand;
            }

            $result = $operand;
        }

        return $result;
    }
}