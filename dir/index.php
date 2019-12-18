<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 08:23
 */

$name = "images";

if (!is_dir($name))
{
    mkdir($name);
    echo "Diretório criado com sucesso!";
} else {
    rmdir($name);
    echo "Diretório já existe e foi apagado com sucesso!";
}