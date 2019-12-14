<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 12/12/2019
 * Time: 11:08
 */

function test($callback) {

    $callback();

}


test(function(){

    echo "Terminou!";

});

echo "<br>";

// Colocar uma função em uma variável para chamar pelo nome da variável
$fn = function($a){

    var_dump($a);

};

$fn("OI 1");


// Colocando um nome para a função para chamar pelo nome da função
function fn($a){

    var_dump($a);

};

fn("OI 2");
