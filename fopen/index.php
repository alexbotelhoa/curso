<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 08:48
 */

//Apaga o conteúdo antigo e adiciona um novo conteúdo
//$file = fopen("log.txt", "w+");

//Mantém o conteúdo antigo e adiciona um novo conteúdo
$file = fopen("log.txt", "a+");

fwrite($file , date("d/m/Y H:i:s" . "\r\n"));

fclose($file);

echo "Arquivo criado com sucesso!";