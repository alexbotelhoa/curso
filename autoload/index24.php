<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 19:47
 */

function incluirClasses($nomeClasse)
{
    //echo $nomeClasse;

    if (file_exists($nomeClasse . ".php") === true) {
        require_once ($nomeClasse . ".php");
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse) {

    if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        require_once ("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

});

$carro = new Delrey();

$carro->acelerar(100);