<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 16:10
 */

spl_autoload_register(function ($class_name){

    $filename = "class" . DIRECTORY_SEPARATOR . $class_name.".php";

    if (file_exists(($filename)))
    {
        require_once($filename);
    }

});