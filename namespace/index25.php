<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 20:19
 */

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alex Botelho");
$cad->setEmail("alexbotelho1@hotmail.com");
$cad->setSenha("123456");

//echo $cad;

$cad->registrarVenda();