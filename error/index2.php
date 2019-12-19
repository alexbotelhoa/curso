<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 19:34
 */

//Retira a mesagem de Notice de Erro
error_reporting(E_ALL & ~E_NOTICE);

//Provoca o erro pois devolve um GET vazio e estoura um notice na tela
$nome = $_GET["nome"];
echo $nome;