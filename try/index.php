<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 19/12/2019
 * Time: 11:23
 */

try {

    throw new Exception("Houve um erro.", 001);

} catch (Exception $e) {

    echo json_encode(array(
        "messagem" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()

    ));

}