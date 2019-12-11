<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 14:27
 */

$aa = null;
$bb = null;
$a = 100.0;
$b = 90.0;

var_dump($a <=> $b);

echo "<br>";

echo $aa ?? $bb ?? $a;

echo "<br>";

echo ++$a;

echo "<br>";

echo --$b;

echo "<br>";

$nome = "Alex";
$nome1 = 'Marcel';

echo "$nome1 filho de $nome";