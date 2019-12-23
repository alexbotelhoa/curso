<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 16:36
 */

$pasta = "arquivos";
$permisao = 0555;

if (!is_dir($pasta)) mkdir($pasta, $permisao);

echo "Diretório criado com sucesso";

