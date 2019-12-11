<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 18:19
 */

$condicao = true;

while ($condicao) {

    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "TRÊS!!!";
        $condicao = false;
    }

    echo $numero . " ";

}

echo "<br><br>";

$total = 150;
$desconto = .9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;