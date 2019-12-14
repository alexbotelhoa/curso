<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 13:40
 */

$nome = "Alex";
$sobrenome = "Botelho";

function teste() {

    global $nome;
    echo $nome;

}

function teste2() {

    global $sobrenome;
    echo $sobrenome;

}

teste();

echo "<br>";

teste2();

?>