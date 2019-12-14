<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 10:09
 */


function moeda($valor) {
    return number_format($valor, 2, ',', '.');
}

echo moeda(900);

echo "<br><br>";

function soma(int ...$valores):string {
    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo moeda(soma(23, 26));
echo "<br>";
echo soma(12.5, 23.8);
echo "<br>";