<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 13:36
 */

//Função trata o erro e apresenta conforme parametros a baixo selecionados
function error_handler($code, $message, $file, $line)
{
    echo json_encode(array(
        "code" => $code,
        "mes" => $message,
        "file" => $file,
        "line" => $line
    ));

}

//Chama a função
set_error_handler("error_handler");

//Provoca o erro (nenhum número pode ser divido por zero)
echo 100 / 0;
