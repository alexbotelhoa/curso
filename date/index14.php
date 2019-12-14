<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 16:19
 */

$dt = new DateTime("01-06-2019");

$periodo = new DateInterval("P10M");

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

$dt->sub($periodo);

echo $dt->format("d/m/Y H:i:s");