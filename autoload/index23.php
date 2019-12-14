<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 19:38
 */

function __autoload($nomeClasse)
{
    require_once ("$nomeClasse.php");
}

$carro = new Delrey();

$carro->acelerar(100);