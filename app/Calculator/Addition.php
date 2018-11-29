<?php
/**
 * Created by PhpStorm.
 * User: evapamfil
 * Date: 29/11/2018
 * Time: 13:53
 */

namespace App\Calculator;

use App\Calculator\Contracts\CalculateInterface;
use App\Calculator\Exceptions\NoOperandsException;


class Addition extends NoOperandsException implements CalculateInterface
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
        $result = null;

        if(empty($this->operands)){

            throw new NoOperandsException();
        }

        foreach($this->operands as $sum)
        {
            $result += $sum;
        }

        return $result;
    }

}