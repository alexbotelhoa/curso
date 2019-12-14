<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 13/12/2019
 * Time: 20:09
 */

spl_autoload_register(function ($nameClass)
{

    $dirClass = "class";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if (file_exists($fileName)) {

        require_once ($fileName);

    }

});