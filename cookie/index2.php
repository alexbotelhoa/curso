<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 11:16
 */

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;
}