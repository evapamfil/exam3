<?php
/**
 * Created by PhpStorm.
 * User: evapamfil
 * Date: 29/11/2018
 * Time: 14:23
 */

namespace App\Calculator\Exceptions;

use Exception;

class NoOperandsException extends Exception
{
    protected $message = 'NO OPERANDS!';
}