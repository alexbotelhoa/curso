<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 11/12/2019
 * Time: 19:18
 */

//SESSION_ID('as34ci959kgci7nlrad18osbh31');

session_start();

echo session_id() . "<br>";

session_regenerate_id();

echo "<br>";

var_dump($_SESSION);

echo "<br>";

echo session_save_path() . "<br>";

echo session_status() . "<br>";

switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas";
        break;

    case PHP_SESSION_NONE:
        echo "Seções habilitadas, mas nenhum ativa";
        break;

    case PHP_SESSION_ACTIVE:
        echo "Seções habilitadas, pelo menos uma ativa";
        break;
}