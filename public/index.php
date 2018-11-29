<?php
/**
 * Created by PhpStorm.
 * User: evapamfil
 * Date: 29/11/2018
 * Time: 13:52
 */

require __DIR__ . '/../vendor/autoload.php';

$addition = new \App\Calculator\Addition();
$addition->setOperands([1,3]);

//echo $addition->calculate();

$division = new \App\Calculator\Division();
$division->setOperands([50,2]);

echo $division->calculate();

