<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 11:12
 */

$data = array(
    "empresa" => "Alex Botelho"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";